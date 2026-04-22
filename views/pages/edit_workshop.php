<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Edit Workshop</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f8f9fa; padding: 40px; }
        .form-card { max-width: 600px; margin: auto; background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
        h2 { color: #e67e22; margin-bottom: 25px; border-bottom: 2px solid #eef0f2; padding-bottom: 10px; }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 8px; font-weight: 600; color: #444; }
        input, select, textarea { width: 100%; padding: 12px; border: 1px solid #ced4da; border-radius: 8px; box-sizing: border-box; font-size: 14px; }
        input:focus { border-color: #e67e22; outline: none; box-shadow: 0 0 5px rgba(230,126,34,0.2); }
        .update-btn { background-color: #e67e22; color: white; padding: 14px; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-size: 16px; font-weight: bold; transition: 0.3s; }
        .update-btn:hover { background-color: #d35400; }
        .back-link { display: block; margin-top: 20px; text-align: center; color: #666; text-decoration: none; font-size: 14px; }
        .back-link:hover { text-decoration: underline; }
    </style>
</head>
<body>

<div class="form-card">
    <h2>Edit Workshop Information</h2>
    <form action="#" method="POST">
        <div class="form-group">
            <label>Workshop Title</label>
            <input type="text" name="title" value="Current Workshop Name" required>
        </div>
        
        <div class="form-group">
            <label>Instructor Name</label>
            <input type="text" name="instructor" value="Instructor Name" required>
        </div>
        
        <div class="form-group">
            <label>Date & Time</label>
            <input type="datetime-local" name="workshop_date" required>
        </div>
        
        <div class="form-group">
            <label>Location</label>
            <input type="text" name="location" value="Main Hall / Online" required>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="description" rows="4">This is the existing description of the workshop that you can edit here.</textarea>
        </div>

        <button type="submit" class="update-btn">Update Workshop</button>
    </form>
    <a href="admin_workshops.php" class="back-link">← Cancel and go back</a>
</div>

</body>
</html>
