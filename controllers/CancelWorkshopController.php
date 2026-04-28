<?php
session_start();
include "../config/db_connection.php";

// cancel workshop

if (isset($_POST['cancel_event'])) {
    $user_id = $_SESSION["user_id"]; 
    $workshop_id = $_POST['workshop_id'];

    $sql = "DELETE FROM attendance WHERE user = $user_id AND workshop = $workshop_id";

    if (mysqli_query($connection, $sql)) {
        header("Location: ../views/pages/profile.php?msg=cancelled");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($connection);
    }
}