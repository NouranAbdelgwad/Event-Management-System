<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Workshops</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f0f2f5; margin: 0; padding: 20px; }
        .container { max-width: 1100px; margin: auto; background: white; padding: 30px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        .header { display: flex; justify-content: space-between; align-items: center; border-bottom: 2px solid #eee; padding-bottom: 20px; margin-bottom: 20px; }
        h1 { color: #1a73e8; margin: 0; }
        .btn-add { background-color: #28a745; color: white; padding: 12px 20px; text-decoration: none; border-radius: 6px; font-weight: bold; transition: 0.3s; }
        .btn-add:hover { background-color: #218838; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th { background-color: #f8f9fa; color: #555; text-align: left; padding: 15px; border-bottom: 2px solid #dee2e6; }
        td { padding: 15px; border-bottom: 1px solid #eee; vertical-align: middle; }
        .status { padding: 5px 10px; border-radius: 20px; font-size: 12px; font-weight: bold; }
        .status-active { background: #e6f4ea; color: #1e7e34; }
        .actions { display: flex; gap: 10px; }
        .btn-edit { color: #1a73e8; text-decoration: none; border: 1px solid #1a73e8; padding: 5px 10px; border-radius: 4px; font-size: 14px; }
        .btn-delete { color: #dc3545; text-decoration: none; border: 1px solid #dc3545; padding: 5px 10px; border-radius: 4px; font-size: 14px; }
        .btn-edit:hover { background: #1a73e8; color: white; }
        .btn-delete:hover { background: #dc3545; color: white; }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Workshop Management</h1>
        <a href="create_workshop.php" class="btn-add">+ Add New Workshop</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Workshop Name</th>
                <th>Date & Time</th>
                <th>Instructor</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>#101</td>
                <td><strong>Web Development Bootcamp</strong></td>
                <td>May 15, 2026 - 10:00 AM</td>
                <td>John Doe</td>
                <td><span class="status status-active">Active</span></td>
                <td class="actions">
                    <a href="edit_workshop.php?id=101" class="btn-edit">Edit</a>
                    <a href="#" class="btn-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td>#102</td>
                <td><strong>UI/UX Design Masterclass</strong></td>
                <td>June 02, 2026 - 02:00 PM</td>
                <td>Sarah Ahmed</td>
                <td><span class="status status-active">Active</span></td>
                <td class="actions">
                    <a href="edit_workshop.php?id=102" class="btn-edit">Edit</a>
                    <a href="#" class="btn-delete">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>
