<?php
$conn = new mysqli("localhost", "root", "", "event_management");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AI Event - Workshops</title>
    <link rel="stylesheet" href="../../assets/css/style.css">


<style>
:root {
    --purple: #472480;
}

body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f3f3f3;
    overflow-x: hidden;
}

.navbar {
    display: flex;
    justify-content: space-between;
    padding: 20px 40px;
    align-items: center;
    background: white;
}

.logo {
    color: var(--purple);
    margin: 0;
}

.nav-links span {
    margin-left: 20px;
    color: gray;
}

.nav-links .active {
    color: black;
    font-weight: bold;
}

.container {
    padding: 30px 40px;
}

.header-section {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.create-btn {
    border: 1px solid var(--purple);
    color: var(--purple);
    padding: 10px 25px;
    border-radius: 30px;
    background: transparent;
    cursor: pointer;
}

.admin-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 20px;
    margin-top: 20px;
}

.admin-table th {
    background: #eee9f6;
    padding: 15px;
    color: var(--purple);
    text-align: left;
}

.admin-table td {
    padding: 15px;
}

.admin-table tbody tr {
    background: white;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.workshop-img {
    width: 80px;
    height: 60px;
    border-radius: 10px;
    object-fit: cover;
}

.speaker {
    color: var(--purple);
    font-weight: bold;
}

.time-style {
    color: var(--purple);
    font-weight: normal;
}

.actions {
    display: flex;
    gap: 10px;
    align-items: center;
}

.btn-edit {
    background: #16a34a;
    color: white;
    border: none;
    padding: 8px 20px;
    border-radius: 20px;
    cursor: pointer;
}

.btn-delete {
    background: transparent;
    color: red;
    border: 1px solid red;
    padding: 8px 20px;
    border-radius: 20px;
    cursor: pointer;
}

.footer {
    background: var(--purple);
    color: white;
    text-align: left;
    padding: 15px 40px;
    width: 100%;
    box-sizing: border-box;
    margin-top: 40px;
}
</style>

</head>

<body>

    <?php 
    $navType = "admin-dashboard";
    include("../components/navbar.php"); 
    ?>

<div class="container">

    <div class="header-section">
        <h2>All Workshops</h2>
        <a class="create-btn" href="create_Workshop.php">Create Workshop</a>
    </div>

    <table class="admin-table">
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

            <!-- ROW 1 -->
            <!-- <tr>
                <td>1</td>
                <td><img src="assets/images/ai2.png" class="workshop-img"></td>
                <td>AI for Designers</td>
                <td class="speaker">Sarah Ahmed</td>
                <td class="time-style">5:00 PM - 7:00 PM</td>
                <td class="actions">

                    <button class="btn-edit">Edit</button>

                    <form method="POST" action="../../controllers/AdminWorkshopsController.php">
                        <input type="hidden" name="id" value="1">
                        <button type="submit" name="delete" class="btn-delete">Delete</button>
                    </form>

                </td>
            </tr> -->





            <tbody>

<?php
$result = $conn->query("SELECT * FROM workshop");

while($row = $result->fetch_assoc()) {
?>

<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['img'] ?></td>

  <td><?= $row['name'] ?></td>
<td><?= $row['topic'] ?></td>

<td>
    <?= $row['start_time'] ?> - <?= $row['end_time'] ?>
</td>

    <td class="actions">
 <button class="btn-edit"><a href="edit_workshop.php?id=<?= $row['id'] ?>">Edit</a></button>
        <form method="POST" action="../../controllers/AdminWorkshopsController.php">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <button type="submit" name="delete" class="btn-delete">Delete</button>
        </form>

    </td>
</tr>

<?php } ?>

</tbody>





            <!-- ROW 2 -->
            <!-- <tr>
                <td>2</td>
                <td><img src="assets/images/ai2.png" class="workshop-img"></td>
                <td>AI For Designers</td>
                <td class="speaker">Sarah Ahmed</td>
                <td class="time-style">5:00 PM - 7:00 PM</td>
                <td class="actions">

                    <button class="btn-edit">Edit</button>

                    <form method="POST" action="../../controllers/AdminWorkshopsController.php">
                        <input type="hidden" name="id" value="2">
                        <button type="submit" name="delete" class="btn-delete">Delete</button>
                    </form>

                </td>
            </tr> -->






            

            <!-- ROW 3 -->
            <!-- <tr>
                <td>3</td>
                <td><img src="assets/images/ai2.png" class="workshop-img"></td>
                <td>AI For Designers</td>
                <td class="speaker">Sarah Ahmed</td>
                <td class="time-style">5:00 PM - 7:00 PM</td>
                <td class="actions">

                    <button class="btn-edit">Edit</button>

                    <form method="POST" action="../../controllers/AdminWorkshopsController.php">
                        <input type="hidden" name="id" value="3">
                        <button type="submit" name="delete" class="btn-delete">Delete</button>
                    </form>

                </td>
            </tr> -->

            <!-- ROW 4 -->
            <!-- <tr>
                <td>4</td>
                <td><img src="assets/images/ai2.png" class="workshop-img"></td>
                <td>AI For Designers</td>
                <td class="speaker">Sarah Ahmed</td>
                <td class="time-style">5:00 PM - 7:00 PM</td>
                <td class="actions">

                    <button class="btn-edit">Edit</button>

                    <form method="POST" action="../../controllers/AdminWorkshopsController.php">
                        <input type="hidden" name="id" value="4">
                        <button type="submit" name="delete" class="btn-delete">Delete</button>
                    </form>

                </td>
            </tr> -->

        </tbody>
    </table>

</div>

<div class="footer">
    © 2026 AI Event Platform. All rights reserved.
</div>

</body>
</html>