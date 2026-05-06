<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Event - Profile</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <style>
        /* إعدادات الصفحة العامة */
        body {
            background-color: #fdfdfd;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* تحديد حجم الصفحة وتوسيطها */
        .profile-section {
            max-width: 900px; /* تقليل العرض لجعل التصميم ملموم */
            margin: 40px auto;
            padding: 0 20px;
        }

        /* كارت المعلومات الأبيض */
        .info-card {
            background: white;
            padding: 40px;
            border-radius: 25px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.03);
            margin-bottom: 40px;
        }

        .info-card h2 {
            margin-top: 0;
            color: #333;
            font-size: 24px;
            margin-bottom: 25px;
        }

        /* تنسيق الـ Grid ليصبح صف واحد متناسق */
        .inputs-grid {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap; /* لضمان عدم خروج العناصر في الشاشات الصغيرة */
        }

        .input-group {
            flex: 1;
            min-width: 200px;
        }

        .input-group input {
            width: 100%;
            padding: 14px 20px;
            border: 1px solid #ececec;
            border-radius: 12px;
            background-color: #f9f9f9;
            color: #888;
            font-size: 14px;
            box-sizing: border-box;
        }

        /* تنسيق الأزرار بجانب بعضها */
        .profile-actions {
            display: flex;
            gap: 10px;
        }

        .edit-btn, .logout-btn {
            padding: 12px 25px;
            border-radius: 15px;
            font-weight: 600;
            font-size: 14px;
            text-decoration: none;
            display: inline-block;
            border: none;
            cursor: pointer;
            transition: 0.3s;
            white-space: nowrap; /* منع انقسام النص */
        }

        .edit-btn {
            background-color: #28a745;
            color: white;
        }

        .logout-btn {
            background-color: #dc3545;
            color: white !important;
        }

        .edit-btn:hover { background-color: #218838; }
        .logout-btn:hover { background-color: #c82333; }

        /* قسم الورش */
        .workshops-list h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .no-workshops {
            color: #666;
            font-size: 15px;
        }
    </style>
</head>
<body>

    <?php 
    $navType = "profile-icon";
    include "../components/navbar.php"; 
    
    // تأكدي من تضمين ملفات الاتصال والجلسة
    include("../../config/db_connection.php");
    include("../../controllers/ProfileController.php");
    
    $user_id = $_SESSION['user']['id'];
    $sql = "SELECT * FROM user WHERE id = $user_id";
    $result = mysqli_query($connection, $sql);
    $user = mysqli_fetch_assoc($result);
    ?>

    <main class="profile-section">
        
        <section class="info-card">
            <h2>My Information</h2>
            <form class="inputs-grid" action="../../controllers/ProfileController.php" method="POST">
                <div class="input-group">
    <input type="text" name="full_name" value="<?php echo htmlspecialchars($user['name']); ?>" required>
</div>
<div class="input-group">
    <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
</div>
                
                <div class="profile-actions">
                    <button class="edit-btn" type="submit" name="update_profile">Update Profile</button>
                    <a href="../../controllers/logoutController.php" class="logout-btn">Log Out</a>
                </div>
            </form>
        </section>

        <section class="workshops-list">
            <h2>My Workshops</h2>
            <?php if (isset($workshops_result) && mysqli_num_rows($workshops_result) > 0): ?>
                <!-- كود عرض الورش يوضع هنا -->
            <?php else: ?>
                <p class="no-workshops">You haven't joined any workshops yet.</p>
            <?php endif; ?>
        </section>

    </main>
<?php include("../components/footer.php"); ?>

</body>
</html>