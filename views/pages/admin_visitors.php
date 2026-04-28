<?php
include("../../controllers/AdminVisitorsContoller.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Visitors List</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #fdfdfd;
            margin: 0;
        }

        .admin-container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 20px;
        }

        h2 {
            color: #472480;
            margin-bottom: 25px;
        }

        .visitors-table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            border-radius: 10px;
            overflow: hidden;
        }

        .visitors-table th {
            background-color: #472480;
            color: white;
            padding: 15px;
            text-align: left;
        }

        .visitors-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
            color: #333;
        }

        .visitors-table tr:hover {
            background-color: #f8f7ff;
        }

        .cancel {
            color: red;
            border-radius: 10px;
            border: 1px red solid;
            background-color: transparent;
            padding: 5px 15px;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
        }

        .cancel:hover {
            background-color: red;
            color: white;
        }
    </style>
</head>

<body>
    <?php
    $navType = "admin-dashboard";
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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($result) && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>#" . $row['id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>
        <form action='../../controllers/AdminVisitorsController.php' method='POST' onsubmit='return confirm(\"Are you sure you want to delete this user?\");'>
            <input type='hidden' name='delete_user_id' value='" . $row['id'] . "'>
            <button type='submit' class='cancel'>Delete</button>
        </form>
      </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4' style='text-align:center;'>No visitors found in database.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <?php include("../components/footer.php"); ?>
</body>

</html>