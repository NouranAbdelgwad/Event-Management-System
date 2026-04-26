<?php
include "../../config/db_connection.php";

$sql = "SELECT * FROM workshop";

$results = mysqli_query($connection, $sql);

?>