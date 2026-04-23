<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop Details - AI Event</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <style>
        :root { --main-purple: #5a2d82; --light-purple: #f8f7ff; }
        body { font-family: 'Inter', sans-serif; background-color: #fff; margin: 0; color: #333; }
        .details-container { max-width: 900px; margin: 50px auto; padding: 0 20px; }
        .back-link { text-decoration: none; color: var(--main-purple); font-size: 0.9rem; margin-bottom: 20px; display: inline-block; }
        .details-header { display: flex; gap: 40px; align-items: flex-start; margin-top: 20px; }
        .details-img { width: 450px; height: 300px; border-radius: 15px; object-fit: cover; box-shadow: 0 10px 25px rgba(0,0,0,0.1); }
        .details-info h1 { font-size: 2rem; color: #111; margin: 0 0 15px 0; }
        .speaker-name { font-size: 1.1rem; color: var(--main-purple); font-weight: 600; margin-bottom: 20px; }
        .meta-info { background: var(--light-purple); padding: 15px; border-radius: 10px; margin-bottom: 25px; }
        .meta-info p { margin: 5px 0; font-size: 0.9rem; color: #555; }
        .description { line-height: 1.8; color: #666; font-size: 1rem; }
        .btn-register { background: var(--main-purple); color: white; padding: 12px 35px; border-radius: 25px; text-decoration: none; display: inline-block; margin-top: 30px; font-weight: 500; }
        .footer-line { background-color: var(--main-purple); color: white; text-align: center; padding: 15px; margin-top: 80px; font-size: 0.8rem; }
    </style>
</head>
<body>
    <?php 
    $navType = "home";
    include("../components/navbar.php");
    ?>

    <div class="details-container">
        <a href="workshops.php" class="back-link">← Back to Workshops</a>
        
        <div class="details-header">
            <img src="../../assets/images/ai-design.jpg" class="details-img" alt="Workshop Image">
            <div class="details-info">
                <h1>AI for Designers</h1>
                <p class="speaker-name">By Eng. Ziad Abdelazeem</p>
                
                <div class="meta-info">
                    <p><strong>Date:</strong> 25th April 2026</p>
                    <p><strong>Time:</strong> 5:00 PM - 7:00 PM</p>
                    <p><strong>Location:</strong> Hall A - Virtual</p>
                </div>

                <div class="description">
                    This workshop explores how artificial intelligence is shaping the future of the creative industry. 
                    From UI/UX enhancements to automated assets generation, learn how to leverage AI tools in your workflow.
                </div>

                <a href="#" class="btn-register">Register Now</a>
            </div>
        </div>
    </div>

    <div class="footer-line">
        © 2026 AI Event Platform. All rights reserved.
    </div>
</body>
</html>
