<?php
// 1. الاتصال بقاعدة البيانات
$conn = new mysqli("localhost", "root", "", "event_management");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. جلب معرف الورشة من الرابط (URL)
if (!isset($_GET['id'])) {
    die("Workshop ID not specified.");
}
$id = $_GET['id'];

// 3. جلب البيانات الحالية لعرضها في الحقول
$result = $conn->query("
    SELECT workshop.*, speaker.name AS speaker_name
    FROM workshop
    LEFT JOIN speaker ON workshop.speaker_id = speaker.id
    WHERE workshop.id = $id
");
$data = $result->fetch_assoc();

if (!$data) {
    die("Workshop not found.");
}

// 4. معالجة طلب التحديث (عند الضغط على الزر)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $speaker_name = mysqli_real_escape_string($conn, $_POST['speaker']);
    $speaker_id = $data['speaker_id'];
    
    // دمج التاريخ والوقت في صيغة واحدة (Y-m-d H:i:s)
    $full_date = $_POST['date'] . ' ' . $_POST['time'];

    // أ- تحديث بيانات المحاضر (Speaker)
    if ($speaker_id) {
        $sql_speaker = "UPDATE speaker SET name='$speaker_name' WHERE id=$speaker_id";
        $conn->query($sql_speaker);
    }

    // ب- معالجة الصورة: إذا تم رفع صورة جديدة يتم تحديثها، وإلا تبقى القديمة
    $image_update_part = "";
    if (!empty($_FILES['image']['tmp_name'])) {
        $imgData = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $image_update_part = ", img='$imgData'";
    }

    // ج- تحديث بيانات الورشة (تم استخدام topic بدلاً من name بناءً على بنية الجدول)
    $sql_workshop = "UPDATE workshop SET 
            topic='$title', 
            start_time='$full_date',
            disc='$description'
            $image_update_part
            WHERE id=$id";

    if ($conn->query($sql_workshop)) {
        // التحويل لصفحة الجدول مع رسالة نجاح
        header("Location: admin_workshops.php?status=updated");
        exit();
    } else {
        $error_message = "Error updating: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Workshop - AI Event</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <style>
        :root { --main-purple: #472480; }
        body { font-family: 'Segoe UI', sans-serif; background-color: #f8f9fa; margin: 0; }
        .form-container { max-width: 800px; margin: 40px auto; padding: 30px; background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
        .form-container h2 { color: var(--main-purple); border-bottom: 2px solid var(--main-purple); padding-bottom: 10px; margin-bottom: 30px; }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; margin-bottom: 8px; font-weight: 600; color: #444; }
        .form-group input, .form-group textarea { 
            width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; box-sizing: border-box; 
        }
        .btn-update { 
            background: #16a34a; color: white; border: none; padding: 15px; border-radius: 30px; 
            width: 100%; font-size: 16px; font-weight: bold; cursor: pointer; transition: 0.3s;
        }
        .btn-update:hover { background: #15803d; }
        .back-btn { text-decoration: none; color: var(--main-purple); font-weight: bold; display: inline-block; margin-bottom: 20px; }
        .current-img-hint { font-size: 12px; color: #666; margin-top: 5px; }
    </style>
</head>
<body>

<div class="form-container">
    <a href="admin_workshops.php" class="back-btn">← Back to Dashboard</a>
    <h2>Edit Workshop Details</h2>

    <?php if(isset($error_message)) echo "<p style='color:red;'>$error_message</p>"; ?>

    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Workshop Title</label>
            <input type="text" name="title" value="<?= htmlspecialchars($data['topic']) ?>" required>
        </div>
        
        <div class="form-group">
            <label>Speaker Name</label>
            <input type="text" name="speaker" value="<?= htmlspecialchars($data['speaker_name']) ?>" required>
        </div>

        <div class="form-group" style="display: flex; gap: 20px;">
            <div style="flex: 1;">
                <label>Date</label>
                <input type="date" name="date" value="<?= date('Y-m-d', strtotime($data['start_time'])) ?>" required>
            </div>
            <div style="flex: 1;">
                <label>Time</label>
                <input type="time" name="time" value="<?= date('H:i', strtotime($data['start_time'])) ?>" required>
            </div>
        </div>

        <div class="form-group">
            <label>Update Image</label>
            <input type="file" name="image" accept="image/*">
            <p class="current-img-hint">Leave empty to keep the current image.</p>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="description" rows="5" required><?= htmlspecialchars($data['disc']) ?></textarea>
        </div>

        <button type="submit" class="btn-update">Save Changes</button>
    </form>
</div>

</body>
</html>