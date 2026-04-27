<?php
session_start();
$role = $_SESSION['user']['role'];
$nav = ['admin' => 'admin-dashboard', 'user' => 'home'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <?php

    $navType = "$nav[$role]";
    include("views/components/navbar.php");
    ?>

    <!-- landing page -->
    <section class="event-container">

        <div class="event-content">

            <div class="event-image">
                <img src="assets/images/event-main.png" alt="event">
            </div>

            <div class="event-text">
                <h1>Don't Miss Your <span>Chance</span>, and join us</h1>
                <p>Empowering event creators through every stage of the journey.</p>

                <div class="hero-buttons">
                    <a href="views/pages/register.php">
                        <button class="btn-primary">Join Event</button>
                    </a>

                    <a href="create_workshop.php">
                        <button class="btn-secondary">Create Workshop</button>
                    </a>
                </div>
            </div>

        </div>

        <section class="about-section">
            <div class="about-card">
                <h2>About the event</h2>
                <p>
                    Join us for an inspiring AI event where innovation meets real-world impact. This event is designed to explore
                    how artificial intelligence is shaping the future across industries—from healthcare and education to business and creative fields.
                    Throughout the event, attendees will have the opportunity to attend interactive workshops, listen to expert
                    talks, and engage in meaningful discussions about the latest trends in AI. Whether you're a beginner curious
                    about AI or a professional looking to deepen your knowledge, the sessions are crafted to provide valuable
                    insights for all levels.
                </p>
            </div>
        </section>
    </section>

    <div class="workshops-section" style="width: 80%;margin: auto;">
        <div class="available workshops" style="display: flex; justify-content: space-between; align-items:center;">
            <h1>Available Workshops</h1>
            <a href="views/pages/workshops.php">see more</a>
        </div>
        <?php 
        include("./config/db_connection.php");
        include("./controllers/HomeController.php");
        include("views/components/workshop_card.php"); ?>
    </div>
    <?php include("views/components/footer.php"); ?>
</body>

</html>