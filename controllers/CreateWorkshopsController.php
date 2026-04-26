<?php
include("../config/db_connection.php");

$sql = "INSERT INTO workshop (name, topic, disc, start_time, end_time, img, event_id, speaker_id) VALUES
('AI Future Summit', 'Artificial Intelligence', 'Discussion about the future of AI in daily life', '2026-05-01 10:00:00', '2026-05-01 12:00:00', 'ai.jpg', 1, 1),
('Web Dev Bootcamp', 'Web Development', 'Learn HTML, CSS, and JavaScript basics', '2026-05-02 14:00:00', '2026-05-02 17:00:00', 'web.jpg', 1, 1),
('Cyber Security Talk', 'Security', 'Introduction to cybersecurity and best practices', '2026-05-03 11:00:00', '2026-05-03 13:00:00', 'security.jpg', 1, 1),
('Data Science Workshop', 'Data Science', 'Hands-on session with data analysis tools', '2026-05-04 09:00:00', '2026-05-04 12:00:00', 'data.jpg', 1, 1),
('Mobile App Trends', 'Mobile Development', 'Latest trends in Android and iOS apps', '2026-05-05 15:00:00', '2026-05-05 18:00:00', 'mobile.jpg', 1, 1)";

if (mysqli_query($connection, $sql)) {
    echo "Data inserted!";
} else {
    echo "Error: " . mysqli_error($connection);
}
?>