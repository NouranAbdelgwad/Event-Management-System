<?php
include "../../config/db_connection.php";

// read workshop
$id = $_GET["id"];
$sql = "SELECT s.name AS speaker_name, w.name, 
w.topic, w.disc, w.start_time, w.end_time, 
w.img, w.event_id, w.speaker_id FROM workshop AS w 
JOIN speaker AS s ON w.speaker_id = s.id
WHERE w.id = $id";
$data = mysqli_query($connection, $sql);
$data = mysqli_fetch_assoc($data);

// check if joined 
$user_id = $_SESSION["user_id"];
$workshop_id = $id;

$check_sql = "SELECT * FROM attendance WHERE user = $user_id AND workshop = $workshop_id";
$check_result = mysqli_query($connection, $check_sql);

$is_joined = (mysqli_num_rows($check_result) > 0);
