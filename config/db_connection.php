<?php
$connection = mysqli_connect("localhost", "root", "", "event_management");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully!";
?>