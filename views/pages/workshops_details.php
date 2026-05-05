<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1200">
    <title>AI Event - Laptop View</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <style>
        /* * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; } */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
        }

        .logo {
            color: #4B2A85;
            font-weight: bold;
            font-size: 1.5rem;
        }

        button {
            background: #4B2A85;
            color: white;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-weight: 600;
        }

        .btn-join-event {
            padding: 8px 25px;
        }

        .btn-workshop {
            padding: 12px 30px;
            font-size: 0.9rem;
        }

        .btn-card {
            padding: 6px 20px;
            font-size: 0.8rem;
        }

        .main-event {
            display: flex;
            padding: 20px 50px 60px;
            gap: 40px;
            align-items: center;
        }

        .main-img {
            width: 450px;
            border-radius: 20px;
        }

        .details h3 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 5px;
        }

        .details .eng {
            color: #999;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .details .desc {
            color: #666;
            line-height: 1.6;
            font-size: 0.95rem;
            margin-bottom: 10px;
        }

        .time-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
        }

        .time-text {
            color: #4B2A85;
            font-weight: bold;
            font-size: 0.9rem;
        }

        .workshops-section {
            background-color: #F8F9FA;
            border-radius: 50px 50px 0 0;
            padding: 40px 50px;
            margin-top: -30px;
            position: relative;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 25px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            padding-bottom: 15px;
        }

        .card img {
            width: 100%;
            height: 160px;
            object-fit: cover;
        }

        .card-info {
            padding: 15px;
        }

        .card-info h5 {
            margin-bottom: 5px;
        }

        .card-info p {
            color: #999;
            font-size: 0.8rem;
            margin-bottom: 15px;
        }

        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 15px;
        }

        footer {
            background-color: #4B2A85;
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 0.85rem;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    if ($_SESSION["user"]["role"] == "user") {
        $navType = "profile-icon";
    } elseif ($_SESSION["user"]["role"] == "admin") {
        $navType = "admin-dashboard";
    } else {
        $navType = "home";
    }
    include("../components/navbar.php");
    include "../../controllers/WorkshopsDetailsController.php";
    ?>
    <div class="container">

        <section class="main-event">
            <?php
            $imageData = base64_encode($data['img']);
            $imageType = "image/jpeg";
            echo '<img src="data:' . $imageType . ';base64,' . $imageData . '" class="main-img" alt="Workshop">';
            ?>
            <div class="details">
                <h3><?php echo $data['name'] . " - " . $data['topic']; ?></h3>

                <p class="eng"> Eng. <?php echo $data['speaker_name']; ?></p>

                <p class="desc"><?php echo $data['disc']; ?></p>

                <div class="time-row">
                    <span class="time-text">
                        🕒 <?php echo $data['start_time']; ?> - <?php echo $data['end_time']; ?>
                    </span>
                    <?php if ($is_joined): ?>
                        <button class="btn-workshop joined" disabled style="background-color: #ccc;">Joined ✅</button>
                    <?php else: ?>
                        <form method="POST" action="../../controllers/join_logic.php">
                            <input type="hidden" name="workshop_id" value="<?php echo $id; ?>">
                            <button type="submit" name="join_event" class="btn-workshop">Join Workshop</button>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <div class="workshops-section">
            <div class="section-header">
                <h4>Other Workshops</h4>
                <a href="workshops.php" style="color: #4B2A85; font-weight: bold; text-decoration: none; font-size: 0.8rem;">See All</a>
            </div>
            <?php
            include "../components/workshop_card.php"; ?>
        </div>
    </div>
    </div>


    </div>
    <?php include("../components/footer.php"); ?>
</body>

</html>