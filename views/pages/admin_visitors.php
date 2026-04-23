<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Visitors List</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #fdfdfd; margin: 0; }
        .admin-container { max-width: 1100px; margin: 40px auto; padding: 20px; }
        
        h2 { color: #472480; margin-bottom: 25px; }

        /* Table Styling matching your branding */
        .visitors-table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            border-radius: 10px;
            overflow: hidden;
        }

        .visitors-table th {
            background-color: #472480; /* Your purple color */
            color: white;
            padding: 15px;
            text-align: left;
        }

        .visitors-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
            color: #333;
        }

        .visitors-table tr:hover { background-color: #f8f7ff; }

        .status { color: #28a745; font-weight: bold; font-size: 13px; }
    </style>
</head>
<body>
    <?php 
    $navType = "admin";
    include("../components/navbar.php"); 
    ?>

    <div class="admin-container">
        <h2>Registered Visitors</h2>
        
        <table class="visitors-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email Address</th>
                    <th>Workshop</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#001</td>
                    <td>Ahmed Ali</td>
                    <td>ahmed@mail.com</td>
                    <td>AI Fundamentals</td>
                    <td><span class="status">Confirmed</span></td>
                </tr>
                <tr>
                    <td>#002</td>
                    <td>Sara Mohamed</td>
                    <td>sara@mail.com</td>
                    <td>Design with AI</td>
                    <td><span class="status">Confirmed</span></td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php include("../components/footer.php"); ?>
</body>
</html>
