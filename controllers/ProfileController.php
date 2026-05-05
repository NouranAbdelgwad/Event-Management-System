<?php
include_once __DIR__ . "../../config/db_connection.php";
session_start();

if (isset($_POST['update_profile'])) {
    // التأكد من وصول البيانات من الفورم
    $full_name = mysqli_real_escape_string($connection, $_POST['full_name']);
    $email     = mysqli_real_escape_string($connection, $_POST['email']);
    
    // التأكد من وجود ID في الجلسة
    if (!isset($_SESSION['user']['id'])) {
        die("Error: User ID not found in session.");
    }
    $user_id = $_SESSION['user']['id'];

    // تنفيذ التحديث
    $sql = "UPDATE user SET name = '$full_name', email = '$email' WHERE id = $user_id";
    
    if (mysqli_query($connection, $sql)) {
        // فحص: هل هناك صفوف تأثرت فعلاً؟[cite: 4]
        if (mysqli_affected_rows($connection) > 0) {
            // تحديث الجلسة فوراً[cite: 4]
            $_SESSION['user']['name'] = $full_name;
            $_SESSION['user']['email'] = $email;
            
            header("Location: ../views/pages/profile.php?status=success");
        } else {
            // إذا لم يتغير شيء (ربما البيانات المدخلة هي نفس القديمة)[cite: 4]
            header("Location: ../views/pages/profile.php?status=no_change");
        }
        exit();
    } else {
        die("Database Error: " . mysqli_error($connection));
    }
}
?>