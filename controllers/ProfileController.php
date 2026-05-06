<?php
include_once __DIR__ . "../../config/db_connection.php";
session_start();

if (isset($_POST['update_profile'])) {
    $full_name = mysqli_real_escape_string($connection, $_POST['full_name']);
    $email     = mysqli_real_escape_string($connection, $_POST['email']);
    
    if (!isset($_SESSION['user']['id'])) {
        die("Error: User ID not found in session.");
    }
    $user_id = $_SESSION['user']['id'];

    $sql = "UPDATE user SET name = '$full_name', email = '$email' WHERE id = $user_id";
    
    if (mysqli_query($connection, $sql)) {
        if (mysqli_affected_rows($connection) > 0) {
            $_SESSION['user']['name'] = $full_name;
            $_SESSION['user']['email'] = $email;
            
            header("Location: ../views/pages/profile.php?status=success");
        } else {
            header("Location: ../views/pages/profile.php?status=no_change");
        }
        exit();
    } else {
        die("Database Error: " . mysqli_error($connection));
    }
}
?>
