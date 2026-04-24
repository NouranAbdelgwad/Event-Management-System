<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Workshops</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <style>
        .admin-container { padding: 40px; max-width: 1100px; margin: auto; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; background: white; }
        th { background: #472480; color: white; padding: 12px; text-align: left; }
        td { padding: 12px; border-bottom: 1px solid #eee; }
        .action-btns { display: flex; gap: 10px; }
        .edit-btn { background: #28a745; color: white; border: none; padding: 5px 12px; border-radius: 5px; cursor: pointer; }
        .delete-btn { background: #dc3545; color: white; border: none; padding: 5px 12px; border-radius: 5px; cursor: pointer; }
        .add-new { background: #472480; color: white; padding: 10px 20px; border-radius: 18px; text-decoration: none; display: inline-block; margin-bottom: 20px; }
    </style>
</head>
<body>
    <?php include("../components/navbar.php"); ?>

    <div class="admin-container">
        <h2 style="color: #472480;">Manage Workshops</h2>
        <a href="create_workshop.php" class="add-new">+ Add New Workshop</a>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Workshop Name</th>
                    <th>Speaker</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>AI for Designers</td>
                    <td>Eng. Ziad</td>
                    <td class="action-btns">
                        <button class="edit-btn" onclick="location.href='edit_workshop.php'">Edit</button>
                        <button class="delete-btn">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php include("../components/footer.php"); ?>
</body>
</html>
