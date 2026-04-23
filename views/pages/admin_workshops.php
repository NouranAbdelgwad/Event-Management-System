<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - All Workshops</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <style>
        :root { --main-purple: #5a2d82; --text-purple: #4a148c; }
        body { font-family: 'Inter', sans-serif; background-color: #fff; margin: 0; }
        .admin-wrapper { max-width: 1100px; margin: 40px auto; padding: 20px; }
        .header-flex { display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; }
        .header-flex h2 { font-size: 1.2rem; color: #333; font-weight: 600; }
        .btn-create { border: 1px solid #ddd; padding: 8px 15px; border-radius: 20px; text-decoration: none; color: var(--main-purple); font-size: 0.8rem; }
        
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th { background-color: #f8f7ff; color: var(--text-purple); text-align: left; padding: 15px; font-size: 0.9rem; border-bottom: 2px solid #eee; }
        td { padding: 15px; border-bottom: 1px solid #f9f9f9; vertical-align: middle; font-size: 0.85rem; color: #444; }
        
        .workshop-img-small { width: 60px; height: 40px; border-radius: 5px; object-fit: cover; }
        .id-cell { color: var(--main-purple); font-weight: bold; }
        .title-cell { font-weight: 500; }
        .speaker-cell { color: #6a1b9a; text-decoration: underline; }
        
        .action-btns { display: flex; gap: 10px; }
        .btn-edit { background-color: #28a745; color: white; padding: 6px 20px; border-radius: 5px; text-decoration: none; }
        .btn-delete { background-color: white; color: #dc3545; border: 1px solid #dc3545; padding: 6px 15px; border-radius: 5px; text-decoration: none; }
        
        .footer-line { background-color: var(--main-purple); color: white; text-align: center; padding: 10px; margin-top: 50px; font-size: 0.8rem; }
    </style>
</head>
<body>
    <?php 
    $navType = "admin";
    include("../components/navbar.php");
    ?>

    <div class="admin-wrapper">
        <div class="header-flex">
            <h2>All Workshops</h2>
            <a href="create_workshop.php" class="btn-create">Create Workshop</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Speaker</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="id-cell">1</td>
                    <td><img src="../../assets/images/ai-design.jpg" class="workshop-img-small"></td>
                    <td class="title-cell">AI for Designers</td>
                    <td class="speaker-cell">Sarah Ahmed</td>
                    <td>5:00 PM - 7:00 PM</td>
                    <td>
                        <div class="action-btns">
                            <a href="edit_workshop.php" class="btn-edit">Edit</a>
                            <a href="#" class="btn-delete">Delete</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="id-cell">2</td>
                    <td><img src="../../assets/images/ai-design.jpg" class="workshop-img-small"></td>
                    <td class="title-cell">AI for Designers</td>
                    <td class="speaker-cell">Sarah Ahmed</td>
                    <td>5:00 PM - 7:00 PM</td>
                    <td>
                        <div class="action-btns">
                            <a href="edit_workshop.php" class="btn-edit">Edit</a>
                            <a href="#" class="btn-delete">Delete</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="footer-line">
        © 2026 AI Event Platform. All rights reserved.
    </div>

</body>
</html>
