<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - All Visitors</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <style>
        :root { --main-purple: #5a2d82; --text-purple: #4a148c; }
        body { font-family: 'Inter', sans-serif; background-color: #fff; margin: 0; }
        .admin-wrapper { max-width: 1100px; margin: 40px auto; padding: 20px; }
        .header-title { font-size: 1.2rem; color: #333; font-weight: 600; margin-bottom: 30px; }
        
        table { width: 100%; border-collapse: collapse; }
        th { background-color: #f8f7ff; color: var(--text-purple); text-align: left; padding: 15px; font-size: 0.9rem; border-bottom: 2px solid #eee; }
        td { padding: 15px; border-bottom: 1px solid #f9f9f9; font-size: 0.85rem; color: #444; }
        
        .id-cell { color: var(--main-purple); font-weight: bold; }
        .workshop-link { color: var(--main-purple); text-decoration: underline; font-weight: 500; }
        
        .btn-cancel { background-color: white; color: #ff4d4d; border: 1px solid #ff4d4d; padding: 6px 15px; border-radius: 5px; text-decoration: none; cursor: pointer; }
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
        <h2 class="header-title">All Visitors</h2>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Workshop</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="id-cell">1</td>
                    <td>Ahmed Mohsen</td>
                    <td>ahmed@gmail.com</td>
                    <td><a href="#" class="workshop-link">AI for Designers</a></td>
                    <td><button class="btn-cancel">Cancel</button></td>
                </tr>
                <tr>
                    <td class="id-cell">2</td>
                    <td>Ahmed Mohsen</td>
                    <td>ahmed@gmail.com</td>
                    <td><a href="#" class="workshop-link">AI for Designers</a></td>
                    <td><button class="btn-delete">Delete</button></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="footer-line">
        © 2026 AI Event Platform. All rights reserved.
    </div>
</body>
</html>
