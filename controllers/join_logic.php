<?php
include "../config/db_connection.php";
session_start();


if (isset($_POST['join_event'])) {
    $user_id = $_SESSION["user_id"];
    $workshop_id = $_POST['workshop_id'];

    $sql = "INSERT INTO attendance (user, workshop) VALUES ('$user_id', '$workshop_id')";
    
    if (mysqli_query($connection, $sql)) {
        // ../views/pages/profile.php?status=success
        header("Location: ../views/pages/workshops_details.php?id=" . $workshop_id);
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
?>