<?php
$conn = new mysqli("localhost", "root", "", "event_management");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

/* =========================
   GET DATA
========================= */
$query = "SELECT workshop.*, speaker.name AS speaker_name
          FROM workshop
          LEFT JOIN speaker ON workshop.speaker_id = speaker.id
          WHERE workshop.id = $id";

$result = $conn->query($query);
$data = $result->fetch_assoc();

/* =========================
   UPDATE DATA
========================= */
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    $speaker_name = $_POST['speaker'];
    $date = $_POST['date'];
    $description = $_POST['description'];

    // speaker handling
    $speaker_query = "SELECT id FROM speaker WHERE name='$speaker_name'";
    $res = $conn->query($speaker_query);

    if ($res->num_rows > 0) {
        $row = $res->fetch_assoc();
        $speaker_id = $row['id'];
    } else {
        $conn->query("INSERT INTO speaker(name) VALUES('$speaker_name')");
        $speaker_id = $conn->insert_id;
    }

    // image
    $image_sql = "";
    if (!empty($_FILES['image']['name'])) {
        $img = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], "../../assets/images/" . $img);
        $image_sql = ", img='$img'";
    }

    // update workshop
    $update = "UPDATE workshop SET 
                name='$title',
                disc='$description',
                start_time='$date',
                speaker_id='$speaker_id'
                $image_sql
                WHERE id=$id";

    if ($conn->query($update)) {
        header("Location: admin_workshops.php");
        exit();
    } else {
        echo $conn->error;
    }
}
?>