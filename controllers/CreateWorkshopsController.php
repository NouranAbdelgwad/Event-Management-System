<?php
require_once "../config/db_connection.php";

if (isset($_POST['create_workshop'])) {
    $topic = mysqli_real_escape_string($connection, $_POST['title']); 
    $disc = mysqli_real_escape_string($connection, $_POST['description']); 
    $start_time = $_POST['date'] . ' ' . $_POST['time']; 
    
    $img = "default.jpg"; 
    if (!empty($_FILES['image']['name'])) {
        $img = time() . "_" . $_FILES['image']['name'];
        $target_dir = "../../assets/images/workshops/";
        if (!is_dir($target_dir)) { 
            mkdir($target_dir, 0777, true); 
        }
        move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $img);
    }

    mysqli_query($connection, "INSERT IGNORE INTO event (id, name) VALUES (1, 'General Event')");
    mysqli_query($connection, "INSERT IGNORE INTO speaker (id, name) VALUES (1, 'General Speaker')");

    $query = "INSERT INTO workshop (topic, disc, img, start_time, event_id, speaker_id) 
              VALUES ('$topic', '$disc', '$img', '$start_time', 1, 1)";

    if (mysqli_query($connection, $query)) {
        header("Location: ../views/pages/admin_workshops.php");
        exit();
    } else {
        die("Database Error: " . mysqli_error($connection));
    }
}
?>
