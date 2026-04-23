<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop Details</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <style>
        .details-wrapper { max-width: 1100px; margin: 40px auto; padding: 20px; display: flex; gap: 40px; flex-wrap: wrap; }
        .details-image { width: 500px; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        .details-content { flex: 1; min-width: 300px; }
        .details-content h1 { color: #472480; margin-top: 0; }
        .info-box { background: #f9f9f9; padding: 15px; border-radius: 10px; margin: 20px 0; border-left: 4px solid #472480; }
        
        /* Using your button style */
        .register-btn { 
            background: #472480; color: white; border: none; padding: 12px 35px; 
            border-radius: 18px; cursor: pointer; font-size: 16px; text-decoration: none; display: inline-block;
        }

        /* Other Workshops Section */
        .others-title { color: #472480; margin-top: 60px; padding-left: 20px; }
        .others-grid { display: flex; gap: 20px; padding: 20px; }
        .mini-card { width: 30%; border: 1px solid #eee; border-radius: 12px; overflow: hidden; }
        .mini-card img { width: 100%; height: 120px; object-fit: cover; }
    </style>
</head>
<body>
    <?php include("../components/navbar.php"); ?>

    <div class="details-wrapper">
        <img src="../../assets/images/ai-design.jpg" class="details-image">
        <div class="details-content">
            <h1>AI for Designers</h1>
            <div class="info-box">
                <p><strong>Speaker:</strong> Eng. Ziad Abdelazeem</p>
                <p><strong>Date:</strong> 25th April 2026</p>
            </div>
            <p style="line-height: 1.6; color: #555;">Detailed description of the workshop goes here. Learning new AI tools.</p>
            <a href="#" class="register-btn">Register Now</a>
        </div>
    </div>

    <h2 class="others-title">Other Workshops</h2>
    <div class="others-grid">
        <div class="mini-card">
            <img src="../../assets/images/ai-intro.jpg">
            <div class="bottom-row">
                <span class="time"><i>🕒</i> 4:00 PM</span>
                <button onclick="location.href='workshops_details.php'">View</button>
            </div>
        </div>
        <div class="mini-card">
            <img src="../../assets/images/data-ai.jpg">
            <div class="bottom-row">
                <span class="time"><i>🕒</i> 6:00 PM</span>
                <button onclick="location.href='workshops_details.php'">View</button>
            </div>
        </div>
    </div>

    <?php include("../components/footer.php"); ?>
</body>
</html>
