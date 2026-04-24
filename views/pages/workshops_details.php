<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop Details</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <style>
        :root { --primary-color: #472480; }
        body { font-family: 'Inter', sans-serif; background-color: #fff; margin: 0; color: #333; }
        .details-container { max-width: 1100px; margin: 50px auto; padding: 0 20px; }
        
        /* Main Section (Your Friend's Part) */
        .main-details { display: flex; gap: 50px; align-items: flex-start; margin-bottom: 80px; flex-wrap: wrap; }
        .main-details img { width: 550px; height: 380px; border-radius: 20px; object-fit: cover; }
        .info-content { flex: 1; min-width: 300px; }
        .info-content h1 { font-size: 2.5rem; color: #111; margin: 0 0 10px 0; }
        .speaker-tag { color: var(--primary-color); font-weight: 600; font-size: 1.1rem; margin-bottom: 25px; }
        .meta-data { background: #fcfaff; padding: 20px; border-radius: 12px; margin-bottom: 30px; }
        .meta-data p { margin: 10px 0; font-size: 0.95rem; display: flex; align-items: center; gap: 10px; }
        .description-text { line-height: 1.8; color: #666; margin-bottom: 35px; }
        
        /* Using your button style */
        .reg-btn { background: var(--primary-color); color: white; padding: 14px 40px; border-radius: 25px; text-decoration: none; display: inline-block; font-weight: 500; }

        /* Other Workshops Section (Your Part) */
        .other-workshops-title { font-size: 1.6rem; color: #111; margin-bottom: 30px; border-top: 1px solid #eee; padding-top: 50px; }
        .mini-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 25px; }
        .mini-card { border: 1px solid #f0f0f0; border-radius: 15px; overflow: hidden; transition: 0.3s; }
        .mini-card:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.05); }
        .mini-card img { width: 100%; height: 160px; object-fit: cover; }
    </style>
</head>
<body>
    <?php include("../components/navbar.php"); ?>

    <div class="details-container">
        <div class="main-details">
            <img src="../../assets/images/ai-design.jpg" alt="Workshop Image">
            <div class="info-content">
                <h1>AI for Designers</h1>
                <p class="speaker-tag">By Eng. Ziad Abdelazeem</p>
                
                <div class="meta-data">
                    <p>📅 25th April 2026</p>
                    <p>⏰ 5:00 PM - 7:00 PM</p>
                    <p>📍 Hall A - Virtual</p>
                </div>

                <div class="description-text">
                    Join us in this deep-dive session where we explore how artificial intelligence is reshaping 
                    the creative industry. You will learn to use cutting-edge tools for layout generation, 
                    color theory automation, and much more.
                </div>

                <a href="#" class="reg-btn">Register for Workshop</a>
            </div>
        </div>

        <h2 class="other-workshops-title">Other Workshops You Might Like</h2>
        <div class="mini-grid">
            <div class="mini-card">
                <img src="../../assets/images/ai-intro.jpg">
                <div class="bottom-row">
                    <div class="time"><i>🕒</i> 4:00 PM</div>
                    <button onclick="location.href='workshops_details.php'">View</button>
                </div>
            </div>
            <div class="mini-card">
                <img src="../../assets/images/data-ai.jpg">
                <div class="bottom-row">
                    <div class="time"><i>🕒</i> 6:00 PM</div>
                    <button onclick="location.href='workshops_details.php'">View</button>
                </div>
            </div>
        </div>
    </div>

    <?php include("../components/footer.php"); ?>
</body>
</html>
