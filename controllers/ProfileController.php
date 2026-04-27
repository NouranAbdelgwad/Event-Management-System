<?php
session_start();
include "../../config/db_connection.php";

if (isset($_POST['update_profile'])) {
    $full_name = mysqli_real_escape_string($connection, $_POST['full_name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    
    $user_id = $_SESSION["user"]["id"]; 

    $sql = "UPDATE user SET name = '$full_name', email = '$email' WHERE id = $user_id";

    if (mysqli_query($connection, $sql)) {
        header("Location: ../views/pages/profile.php?status=success");
        exit();
    } else {
        echo "Error updating profile: " . mysqli_error($connection);
    }
}

// read workshops assigned by this user
$user_id = $_SESSION['user_id'];
$sql_workshops = "SELECT workshop.* FROM workshop 
                  JOIN attendance ON workshop.id = attendance.workshop 
                  WHERE attendance.user = $user_id";

$workshops_result = mysqli_query($connection, $sql_workshops);




?>