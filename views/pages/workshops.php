<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Event Platform</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fff;
        }

        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('../../assets/images/hero.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 380px;
            color: white;
            padding: 20px 60px;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }

        .logo {
            font-size: 22px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .join-event-btn {
            background: #472480;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 14px;
        }

        .hero-content {
            text-align: center;
            max-width: 850px;
            margin: 0 auto;
        }

        .hero-content h1 {
            font-size: 45px;
            margin-bottom: 15px;
        }

        .hero-content p {
            font-size: 14px;
            line-height: 1.6;
            color: #ddd;
        }

        .workshops-container {
            padding: 40px 60px;
        }

        .section-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 30px;
            color: #333;
        }

        .workshops-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            width: 100%;
        }

        .workshop-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            border: 1px solid #eee;
            display: flex;
            flex-direction: column;
        }

        .workshop-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .card-body {
            padding: 20px;
        }

        .card-body h3 {
            margin: 0 0 5px 0;
            font-size: 17px;
            color: #222;
        }

        .instructor-name {
            font-size: 13px;
            color: #888;
            margin-bottom: 15px;
        }

        .time {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
        }

        .time i {
            font-size: 13px;
            color: #888;
        }

        .bottom-row {
            display: flex;
            justify-content: flex-end;
        }

        .bottom-row button {
            background: #472480;
            border: none;
            color: white;
            padding: 8px 22px;
            border-radius: 18px;
            cursor: pointer;
            font-size: 14px;
        }

        footer {
            background: #472480;
            color: white;
            text-align: center;
            padding: 18px;
            font-size: 22px;
            margin-top: 60px;
        }
    </style>
</head>

<body>
    <div class="hero-section">
        <div class="navbar">
            <div class="worksops-page-logo">AI EVENT.</div>
            <button class="join-event-btn">Join Event</button>
        </div>
        <div class="hero-content">
            <h1>Our Workshops</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>

    <div class="workshops-container">
        <h2 class="section-title">Workshops</h2>

        <div class="workshops-grid">
            <?php
            // take this copy and put it in all pages that need to show workshops
            include "../../controllers/WorkshopsController.php";
            if (mysqli_num_rows($results) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($results)): ?>

                    <div class="workshop-card">
                        <?php
                        $imageData = base64_encode($row['img']);
                        $imageType = "image/jpeg"; 
                        echo '<img src="data:' . $imageType . ';base64,' . $imageData . '" alt="Workshop">';
                        ?>
                        <div class="card-body">
                            <h3><?php echo $row['name']; ?></h3>
                            <div class="instructor-name">
                                <?php echo "name" ?>
                            </div>
                            <div class="time">
                                <i class="fa-regular fa-clock"></i>
                                <?php echo $row['start_time']; ?> - <?php echo $row['end_time']; ?>
                            </div>

                            <div class="bottom-row">
                                <button onclick="location.href='workshops_details.php?id=<?php echo $row['id']; ?>'">
                                    Details
                                </button>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php else: ?>
                <p>No workshops found.</p>
            <?php endif;
            ?>
        </div>
    </div>

    <footer>
        © 2026 AI Event Platform. All rights reserved.
    </footer>

</body>

</html>