<?php

$conn = new mysqli("localhost", "root", "", "event_management");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// DELETE
if (isset($_POST['delete']) && isset($_POST['id'])) {

    $id = intval($_POST['id']);

    $sql = "DELETE FROM workshop WHERE id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: ../views/pages/admin_workshops.php");
        exit();
    } else {
        echo "Delete Error: " . $stmt->error;
    }
}


// UPDATE
if (isset($_POST['update']) && isset($_POST['id'])) {

    $id = intval($_POST['id']);
    $title = $_POST['title'];
    $speaker = $_POST['speaker'];
    $time = $_POST['time'];

    $sql = "UPDATE workshop SET title=?, speaker=?, time=? WHERE id=?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $title, $speaker, $time, $id);

    if ($stmt->execute()) {
        header("Location: ../views/pages/admin_workshops.php");
        exit();
    } else {
        echo "Update Error: " . $stmt->error;
    }
}

?>