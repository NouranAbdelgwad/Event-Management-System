<?php
$conn = new mysqli("localhost", "root", "", "event_management");

$id = $_GET['id'];

// نجيب البيانات
$result = $conn->query("
SELECT workshop.*, speaker.name AS speaker_name
FROM workshop
LEFT JOIN speaker ON workshop.speaker_id = speaker.id
WHERE workshop.id = $id
");
$data = $result->fetch_assoc();

// لما ندوس update
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    $date = $_POST['date'];
    $description = $_POST['description'];

    $sql = "UPDATE workshop SET 
            name='$title',
            start_time='$date',
            disc='$description'
            WHERE id=$id";

    if ($conn->query($sql)) {
        header("Location: admin_workshops.php");
        exit();
    } else {
        echo $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Workshop - Admin</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <style>
        :root { --main-purple: #472480; }
        body { font-family: 'Inter', sans-serif; background-color: #fdfdfd; margin: 0; }
        .form-container { max-width: 700px; margin: 50px auto; padding: 30px; background: white; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); }
        .form-container h2 { color: var(--main-purple); margin-bottom: 25px; border-bottom: 2px solid #eee; padding-bottom: 10px; }
        
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; margin-bottom: 8px; font-weight: 500; color: #333; }
        .form-group input, .form-group textarea { 
            width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; font-size: 14px; box-sizing: border-box;
        }
        
        .btn-update { 
            background: #28a745; color: white; border: none; padding: 12px 30px; 
            border-radius: 25px; cursor: pointer; font-size: 16px; font-weight: 500; width: 100%; margin-top: 10px;
        }
        
        .back-btn { display: inline-block; margin-bottom: 20px; color: var(--main-purple); text-decoration: none; font-size: 14px; }
    </style>
</head>
<body>
    <?php 
    $navType = "admin";
    include("../components/navbar.php"); 
    ?>

   <div class="form-container">
    <a href="admin_workshops.php" class="back-btn">← Back to Dashboard</a>
    <h2>Edit Workshop Details</h2>
    
    <form method="POST" enctype="multipart/form-data">

        <!-- ID hidden -->
        <input type="hidden" name="id" value="<?= $data['id'] ?>">

        <div class="form-group">
            <label>Workshop Title</label>
            <input type="text" name="title" value="<?= $data['name'] ?>">
        </div>
        
        <div class="form-group">
            <label>Speaker Name</label>
            <input type="text" name="speaker" value="<?= $data['speaker_name'] ?? '' ?>">
        </div>

        <div class="form-group" style="display: flex; gap: 15px;">
            <div style="flex: 1;">
                <label>Date</label>
                <input type="date" name="date" value="<?= $data['start_time'] ?>">
            </div>
            <div style="flex: 1;">
                <label>Time</label>
                <input type="time" name="time" value="">
            </div>
        </div>

        <div class="form-group">
            <label>Change Image (Optional)</label>
            <input type="file" name="image">
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="description" rows="5"><?= $data['disc'] ?></textarea>
        </div>

        <button type="submit" class="btn-update">Update Workshop Information</button>
    </form>
</div>

    <?php include("../components/footer.php"); ?>
</body>
</html>
