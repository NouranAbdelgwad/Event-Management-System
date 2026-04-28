<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <style>
        .workshops-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            padding: 30px 60px;
        }

        .workshop-card {
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, .08);
            border: 1px solid #eee;
        }

        .workshop-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .card-body {
            padding: 20px;
        }

        .bottom-row {
            display: flex;
            justify-content: flex-end;
        }
    </style>

</head>

<body>
    <?php
    session_start();
    $userRole = $_SESSION['user']['role'] ?? "user";
    if ($userRole == "user") {
        $navType = "profile-icon";
    } elseif ($userRole == "admin") {
        $navType = "admin-dashboard";
    } else {
        $navType = "home";
    }
    include("../components/navbar.php");
    ?>

    <section class="event-container">

        <div class="event-content">

            <div class="event-image">
                <img src="../../assets/images/event-main.png" alt="event">
            </div>

            <div class="event-text">
                <h1>Don't Miss Your <span>Chance</span>, and join us</h1>
                <p>Empowering event creators through every stage of the journey.</p>
                <div class="hero-buttons">
                    <?php
                    if ($_SESSION["user"]["role"] == "admin") {
                        echo `<a href="create_workshop.php">
                        <button class="btn-secondary">Create Workshop</button>
                    </a>`;
                    }
                    if (!$_SESSION["user"]["id"]) {
                        echo `<a href="register.php">
                        <button class="btn-primary">Join Event</button>
                    </a>`;
                    }
                    ?>
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

    <?php include("../components/workshop_card.php"); ?>
    <?php include("../components/footer.php"); ?>
</body>

</html>