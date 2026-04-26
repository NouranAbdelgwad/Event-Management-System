<?php
include "../../config/db_connection.php";

$sql = "
SELECT workshop.*, speaker.name AS speaker_name
FROM workshop
JOIN speaker
ON workshop.speaker_id = speaker.id
";

$results = mysqli_query($connection,$sql);
?>
