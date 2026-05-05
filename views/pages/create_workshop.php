<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Workshop - Admin</title>
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
        .btn-submit { 
            background: var(--main-purple); color: white; border: none; padding: 12px 30px; 
            border-radius: 25px; cursor: pointer; font-size: 16px; font-weight: 500; width: 100%; margin-top: 10px;
        }
        .btn-submit:hover { opacity: 0.9; }
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
        <h2>Create New Workshop</h2>
        
        <form action="../../controllers/CreateWorkshopsController.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Workshop Title</label>
                <input type="text" name="title" placeholder="e.g. AI for Designers" required>
            </div>
            
            <div class="form-group">
                <label>Speaker Name</label>
                <input type="text" name="speaker" placeholder="e.g. Eng. Ziad Abdelazeem" required>
            </div>

            <div class="form-group" style="display: flex; gap: 15px;">
                <div style="flex: 1;">
                    <label>Date</label>
                    <input type="date" name="date" required>
                </div>
                <div style="flex: 1;">
                    <label>Time</label>
                    <input type="time" name="time" required>
                </div>
            </div>

            <div class="form-group">
                <label>Workshop Image</label>
                <input type="file" name="image" accept="image/*">
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea name="description" rows="5" placeholder="Write full details about the workshop..."></textarea>
            </div>

            <button type="submit" name="create_workshop" class="btn-submit">Create Workshop</button>
        </form>
    </div>

    <?php include("../components/footer.php"); ?>
</body>
</html>