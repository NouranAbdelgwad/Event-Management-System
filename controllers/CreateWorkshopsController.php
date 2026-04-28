<?php
require_once __DIR__ . "/../config/db_connection.php";

if (isset($_POST['create_workshop'])) {
    $topic = $_POST['title'];
    $disc  = $_POST['description']; 
    $start_time = $_POST['date'] . ' ' . $_POST['time']; 

    // --- NEW BINARY IMAGE LOGIC ---
    $imgData = null;
    if (!empty($_FILES['image']['tmp_name'])) {
        // Read the file into a variable
        $imgData = file_get_contents($_FILES['image']['tmp_name']);
    }

    // Use Prepared Statements (Required for Binary Data)
    $query = "INSERT INTO workshop (name, disc, img, start_time, event_id, speaker_id) 
              VALUES (?, ?, ?, ?, 1, 1)";
    
    $stmt = mysqli_prepare($connection, $query);
    
    // "ssbs" means: string, string, blob, string
    mysqli_stmt_bind_param($stmt, "ssbs", $topic, $disc, $imgData, $start_time);
    
    // Send the binary data in chunks
    mysqli_stmt_send_long_data($stmt, 2, $imgData);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: ../views/pages/admin_workshops.php");
        exit();
    } else {
        die("Database Error: " . mysqli_error($connection));
    }
}