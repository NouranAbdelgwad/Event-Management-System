<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Workshops</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6; margin: 0; padding: 0; }
        .container { max-width: 1100px; margin: 50px auto; padding: 20px; }
        .header { text-align: center; margin-bottom: 40px; }
        .header h1 { color: #2c3e50; font-size: 32px; }
        .header p { color: #7f8c8d; }
        
        .workshops-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px; }
        
        .workshop-card { background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.05); transition: transform 0.3s ease; }
        .workshop-card:hover { transform: translateY(-10px); }
        
        .card-image { background: #1a73e8; height: 150px; display: flex; align-items: center; justify-content: center; color: white; font-size: 40px; font-weight: bold; }
        
        .card-body { padding: 20px; }
        .card-title { font-size: 20px; font-weight: bold; color: #333; margin-bottom: 10px; }
        .card-meta { font-size: 14px; color: #666; margin-bottom: 15px; line-height: 1.6; }
        .card-text { color: #555; font-size: 15px; line-height: 1.5; margin-bottom: 20px; }
        
        .btn-view { display: block; text-align: center; background: #1a73e8; color: white; padding: 12px; text-decoration: none; border-radius: 8px; font-weight: 600; transition: 0.3s; }
        .btn-view:hover { background: #1557b0; }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Available Workshops</h1>
        <p>Explore our sessions and enhance your knowledge</p>
    </div>

    <div class="workshops-grid">
        <div class="workshop-card">
            <div class="card-image">UI/UX</div>
            <div class="card-body">
                <div class="card-title">User Experience Design</div>
                <div class="card-meta">
                    Instructor: John Doe <br>
                    Date: May 25, 2026
                </div>
                <p class="card-text">Learn how to create user-friendly interfaces and understand user psychology.</p>
                <a href="workshops_details.php" class="btn-view">View Details</a>
            </div>
        </div>

        <div class="workshop-card">
            <div class="card-image">PHP</div>
            <div class="card-body">
                <div class="card-title">Backend Development</div>
                <div class="card-meta">
                    Instructor: Sarah Ahmed <br>
                    Date: June 02, 2026
                </div>
                <p class="card-text">Build dynamic websites and manage databases using PHP and MySQL.</p>
                <a href="workshops_details.php" class="btn-view">View Details</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
