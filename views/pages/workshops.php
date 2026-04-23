<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Workshops - AI Event</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <style>
        :root { --main-purple: #5a2d82; --light-bg: #fdfbff; }
        body { font-family: 'Inter', sans-serif; background-color: var(--light-bg); color: #333; margin: 0; }
        .hero-section { background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('../../assets/images/workshop-hero.jpg'); 
                        background-size: cover; height: 300px; display: flex; flex-direction: column; 
                        justify-content: center; align-items: center; color: white; text-align: center; }
        .hero-section h1 { font-size: 2.5rem; margin-bottom: 10px; }
        .container { max-width: 1200px; margin: 40px auto; padding: 0 20px; }
        .section-title { font-size: 1.5rem; color: var(--main-purple); margin-bottom: 30px; border-bottom: 2px solid #eee; padding-bottom: 10px; }
        .workshop-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 25px; }
        .workshop-card { background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.05); transition: 0.3s; }
        .workshop-card:hover { transform: translateY(-5px); }
        .workshop-img { width: 100%; height: 180px; object-fit: cover; }
        .workshop-content { padding: 20px; }
        .workshop-content h3 { margin: 0 0 10px; font-size: 1.2rem; }
        .workshop-content p { color: #777; font-size: 0.9rem; margin-bottom: 15px; }
        .info-row { display: flex; justify-content: space-between; align-items: center; }
        .speaker { font-size: 0.85rem; color: #555; font-weight: 500; }
        .btn-join { background-color: var(--main-purple); color: white; padding: 8px 20px; border-radius: 20px; text-decoration: none; font-size: 0.85rem; }
    </style>
</head>
<body>
    <?php 
    $navType = "home";
    include("../components/navbar.php");
    ?>

    <div class="hero-section">
        <h1>Our Workshops</h1>
        <p>Learn from the best in the AI industry</p>
    </div>

    <div class="container">
        <h2 class="section-title">Available Workshops</h2>
        <div class="workshop-grid">
            <div class="workshop-card">
                <img src="../../assets/images/ai-intro.jpg" alt="AI" class="workshop-img">
                <div class="workshop-content">
                    <h3>Introduction to AI</h3>
                    <p>Eng. Sarah Ahmed</p>
                    <div class="info-row">
                        <span class="speaker">3:00 PM - 5:00 PM</span>
                        <a href="workshops_details.php" class="btn-join">Join</a>
                    </div>
                </div>
            </div>
            <div class="workshop-card">
                <img src="../../assets/images/ai-design.jpg" alt="Design" class="workshop-img">
                <div class="workshop-content">
                    <h3>AI for Designers</h3>
                    <p>Eng. Ziad Abdelazeem</p>
                    <div class="info-row">
                        <span class="speaker">5:00 PM - 7:00 PM</span>
                        <a href="workshops_details.php" class="btn-join">Join</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("../components/footer.php");?>
</body>
</html>
