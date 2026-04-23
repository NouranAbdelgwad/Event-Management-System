<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Visitors List</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <style>
        :root { --main-purple: #472480; }
        body { font-family: 'Inter', sans-serif; background-color: #fdfdfd; margin: 0; }
        
        .admin-container { 
            max-width: 1100px; 
            margin: 50px auto; 
            padding: 20px; 
            background: white; 
            border-radius: 15px; 
            box-shadow: 0 4px 15px rgba(0,0,0,0.05); 
        }

        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 15px;
        }

        .header-section h2 { color: var(--main-purple); margin: 0; }

        /* Table Styling */
        .visitors-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .visitors-table th {
            background-color: var(--main-purple);
            color: white;
            padding: 15px;
            text-align: left;
            font-size: 15px;
        }

        .visitors-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
            color: #444;
            font-size: 14px;
        }

        .visitors-table tr:hover { background-color: #f8f7ff; }

        .status-badge {
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 12px;
            background: #e8f5e9;
            color: #2e7d32;
            font-weight: 600;
        }

        /* Using your button style for any actions */
        .btn-export {
            background: var(--main-purple);
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 18px;
            cursor: pointer;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <?php 
    $navType = "admin";
    include("../components/navbar.php"); 
    ?>

    <div class="admin-container">
        <div class="header-section">
            <h2>Registered Visitors</h2>
            <button class="btn-export">Export to Excel</button>
        </div>
        
        <table class="visitors-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Visitor Name</th>
                    <th>Email</th>
                    <th>Workshop Title</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#101</td>
                    <td>Ahmed Khaled</td>
                    <td>ahmed@example.com</td>
                    <td>AI for Designers</td>
                    <td><span class="status-badge">Registered</span></td>
                </tr>
                <tr>
                    <td>#102</td>
                    <td>Mona Hassan</td>
                    <td>mona@example.com</td>
                    <td>UI/UX Fundamentals</td>
                    <td><span class="status-badge">Registered</span></td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php include("../components/footer.php"); ?>
</body>
</html>
