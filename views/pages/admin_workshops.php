<?php
require_once __DIR__ . "/../../config/db_connection.php"; // تأكدي من مسار الاتصال الصحيح

// التحقق من الاتصال
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Event - Workshops Management</title>
    <link rel="stylesheet" href="../../assets/css/style.css">

    <style>
        :root {
            --purple: #472480;
            --light-purple: #eee9f6;
            --green: #16a34a;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f8f9fa;
        }

        .container {
            padding: 40px;
            max-width: 1200px; /* تحديد عرض الصفحة لتكون في المنتصف */
            margin: 0 auto;
        }

        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .header-section h2 {
            color: var(--purple);
            margin: 0;
        }

        .create-btn {
            border: 2px solid var(--purple);
            color: var(--purple);
            padding: 10px 25px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .create-btn:hover {
            background: var(--purple);
            color: white;
        }

        /* تنسيق الجدول */
        .admin-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 15px;
            table-layout: fixed; /* لضمان ثبات عرض الأعمدة */
        }

        .admin-table th {
            background: var(--light-purple);
            padding: 15px;
            color: var(--purple);
            text-align: center;
            font-weight: 600;
        }

        .admin-table tbody tr {
            background: white;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            transition: transform 0.2s;
        }

        .admin-table td {
            padding: 15px;
            text-align: center;
            vertical-align: middle;
            color: #444;
        }

        /* ضبط مقاس الصورة الثابت */
        .workshop-img {
            width: 120px;
            height: 80px;
            border-radius: 8px;
            object-fit: cover; /* لضمان عدم تمطط الصورة */
            display: block;
            margin: 0 auto;
            border: 1px solid #ddd;
        }

        .speaker-name {
            color: var(--purple);
            font-weight: bold;
        }

        .actions {
            display: flex;
            gap: 10px;
            justify-content: center;
            align-items: center;
        }

        .btn-edit {
            background: var(--green);
            border: none;
            padding: 8px 18px;
            border-radius: 20px;
            cursor: pointer;
        }

        .btn-edit a {
            color: white;
            text-decoration: none;
            font-size: 14px;
        }

        .btn-delete {
            background: transparent;
            color: #dc3545;
            border: 1px solid #dc3545;
            padding: 7px 18px;
            border-radius: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-delete:hover {
            background: #dc3545;
            color: white;
        }

        .footer {
            background: var(--purple);
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 50px;
        }
    </style>
</head>
<body>

<?php 
    $navType = "admin-dashboard";
    include("../components/navbar.php"); 
?>

<div class="container">
    <div class="header-section">
        <h2>Workshop Management Panel</h2>
        <a class="create-btn" href="create_Workshop.php">+ Create New Workshop</a>
    </div>

    <table class="admin-table">
        <thead>
            <tr>
                <th style="width: 8%;">ID</th>
                <th style="width: 20%;">Image</th>
                <th style="width: 22%;">Workshop Title</th>
                <th style="width: 15%;">Speaker</th>
                <th style="width: 15%;">Date & Time</th>
                <th style="width: 20%;">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // استعلام جلب البيانات مع ربط جدول الـ Speaker
            $query = "SELECT workshop.*, speaker.name as speaker_name 
                      FROM workshop 
                      JOIN speaker ON workshop.speaker_id = speaker.id 
                      ORDER BY workshop.id DESC";
            
            $result = $connection->query($query);

            if ($result && $result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><strong>#<?= $row['id'] ?></strong></td>
                        <td>
                            <?php if (!empty($row['img'])): ?>
                                <img src="data:image/jpeg;base64,<?= base64_encode($row['img']) ?>" class="workshop-img" alt="Workshop">
                            <?php else: ?>
                                <div style="font-size: 12px; color: #999;">No Image</div>
                            <?php endif; ?>
                        </td>
                        <td style="font-weight: 500;"><?= htmlspecialchars($row['topic']) ?></td>
                        <td class="speaker-name"><?= htmlspecialchars($row['speaker_name']) ?></td>
                        <td>
                            <div style="font-size: 14px;">
                                <?= date('Y-m-d', strtotime($row['start_time'])) ?><br>
                                <span style="color: #666;"><?= date('h:i A', strtotime($row['start_time'])) ?></span>
                            </div>
                        </td>
                        <td>
                            <div class="actions">
                                <button class="btn-edit">
                                    <a href="edit_workshop.php?id=<?= $row['id'] ?>">Edit</a>
                                </button>
                                
                                <form method="POST" action="../../controllers/AdminWorkshopsController.php" onsubmit="return confirm('Are you sure you want to delete this workshop?');">
                                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                    <button type="submit" name="delete" class="btn-delete">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='6'>No workshops found.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<?php include("../components/footer.php"); ?>
</body>
</html>