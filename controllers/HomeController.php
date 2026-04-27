<?php

$sql="
SELECT workshop.*, speaker.name as speaker_name
FROM workshop
JOIN speaker
ON workshop.speaker_id=speaker.id
LIMIT 3
";

$results=mysqli_query($connection,$sql);
?>
