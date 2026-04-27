<?php
require_once "../../config/db_connection.php";

if (isset($_GET['delete_id'])) {
    $id = intval($_GET['delete_id']);
    $sql = "DELETE FROM user WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        header("Location: ../views/pages/admin_visitors.php?status=deleted");
        exit();
    }
}

$query = "SELECT * FROM user WHERE role = 'visitor'"; 
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Database Error: " . mysqli_error($conn));
}
?>