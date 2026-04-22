<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop Details</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f8f9fa; margin: 0; padding: 0; }
        .details-container { max-width: 800px; margin: 50px auto; background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
        .hero-section { background: #1a73e8; color: white; padding: 60px 40px; text-align: center; }
        .hero-section h1 { margin: 0; font-size: 36px; }
        .content-section { padding: 40px; }
        .info-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 30px; border-bottom: 1px solid #eee; padding-bottom: 20px; }
        .info-item { font-size: 16px; color: #555; }
        .info-item strong { color: #333; display: block; margin-bottom: 5px; }
        .description h3 { color: #333; margin-top: 0; }
        .description p { line-height: 1.8; color: #666; font-size: 16px; }
        .btn-register { display: inline-block; background: #28a745; color: white; padding: 15px 35px; text-decoration: none; border-radius: 8px; font-weight: bold; font-size: 18px; margin-top: 20px; transition: 0.3s; }
        .btn-register:hover { background: #218838; }
        .back-link { display: inline-block; margin-top: 30px; color: #1a73e8; text-decoration: none; font-weight: 600; }
    </style>
</head>
<body>

<div class="details-container">
    <div class="hero-section">
        <h1>Workshop Details</h1>
    </div>
    
    <div class="content-section">
        <div class="description">
            <h3>About this Workshop</h3>
            <p>This is a comprehensive workshop designed to take you from a beginner level to an advanced understanding. You will learn practical skills, work on real-world projects, and get feedback from industry experts.</p>
        </div>

        <div class="info-grid">
            <div class="info-item">
                <strong>Instructor</strong>
                Professional Instructor Name
            </div>
            <div class="info-item">
                <strong>Date & Time</strong>
                October 15, 2026 | 10:00 AM
            </div>
            <div class="info-item">
                <strong>Location</strong>
                Virtual Meeting (Zoom) / Main Hall
            </div>
            <div class="info-item">
                <strong>Duration</strong>
                3 Hours
            </div>
        </div>

        <a href="#" class="btn-register">Register Now</a>
        <br>
        <a href="workshops.php" class="back-link">← Back to all workshops</a>
    </div>
</div>

</body>
</html>
