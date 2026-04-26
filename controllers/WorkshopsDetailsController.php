<?php
include "../../config/db_connection.php";
session_start();

// read workshop
$id = $_GET["id"];
$sql = "SELECT `name`, `topic`, `disc`, `start_time`, `end_time`, `img`, `event_id`, `speaker_id` FROM `workshop` WHERE id = $id";
$data = mysqli_query($connection, $sql);
$data = mysqli_fetch_assoc($data);

// check if joined 
$user_id = 1;
$workshop_id = $id; 

$check_sql = "SELECT * FROM attendance WHERE user = $user_id AND workshop = $workshop_id";
$check_result = mysqli_query($connection, $check_sql);

$is_joined = (mysqli_num_rows($check_result) > 0);



?>