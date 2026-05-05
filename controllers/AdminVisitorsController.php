<?php
@include __DIR__ . '/../config/db_connection.php';

if (isset($_POST['delete_user_id'])) {
    // 1. Sanitize the ID
    $id = intval($_POST['delete_user_id']);
    
    // 2. Prepare the statement (Better than raw SQL)
    $stmt = mysqli_prepare($connection, "DELETE FROM user WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        header("Location: ../views/pages/admin_visitors.php?status=deleted");
        exit();
    } else {
        die("Error deleting record: " . mysqli_error($connection));
    }
}

$query = "SELECT * FROM user WHERE role = 'admin'"; 
$result = mysqli_query($connection, $query);
if (!$result) {
    die("Database Error: " . mysqli_error($connection));
}
?>