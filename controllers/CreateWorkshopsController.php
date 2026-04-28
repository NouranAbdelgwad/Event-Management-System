<?php
require_once __DIR__ . "/../config/db_connection.php";

if (isset($_POST['create_workshop'])) {
    $topic = $_POST['title'];
    $disc  = $_POST['description']; 
    $speaker_name = $_POST['speaker']; // الاسم اللي جاي من الفورم
    $start_time = $_POST['date'] . ' ' . $_POST['time']; 

    // 1. تسجيل الـ Speaker الأول عشان ناخد الـ ID بتاعه
    $sql_speaker = "INSERT INTO speaker (name) VALUES (?)";
    $stmt_sp = mysqli_prepare($connection, $sql_speaker);
    mysqli_stmt_bind_param($stmt_sp, "s", $speaker_name);
    mysqli_stmt_execute($stmt_sp);
    $new_speaker_id = mysqli_insert_id($connection); // ده الـ ID الجديد

    // 2. معالجة الصورة (Binary)
    $imgData = null;
    if (!empty($_FILES['image']['tmp_name'])) {
        $imgData = file_get_contents($_FILES['image']['tmp_name']);
    }
    $query = "INSERT INTO workshop (topic, disc, img, start_time, event_id, speaker_id) 
              VALUES (?, ?, ?, ?, 1, ?)";
    
    $stmt = mysqli_prepare($connection, $query);
    
    mysqli_stmt_bind_param($stmt, "ssbsi", $topic, $disc, $imgData, $start_time, $new_speaker_id);
    
    if ($imgData) {
        mysqli_stmt_send_long_data($stmt, 2, $imgData);
    }
    if (mysqli_stmt_execute($stmt)) {
        header("Location: ../views/pages/admin_workshops.php?status=success");
        exit();
    } else {
        die("Database Error: " . mysqli_error($connection));
    }
}