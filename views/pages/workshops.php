<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshops</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
    <?php 
    $navType = "home";
    include("../components/navbar.php"); 
    ?>

    <div class="container" style="padding: 40px; max-width: 1200px; margin: auto;">
        <h2 style="color: #472480; margin-bottom: 30px;">Available Workshops</h2>
        
        <div class="workshops-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 25px;">
            
            <div class="card" style="border: 1px solid #eee; border-radius: 15px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.05);">
                <img src="../../assets/images/ai-design.jpg" style="width: 100%; height: 200px; object-fit: cover;">
                <h3 style="padding: 15px 15px 0 15px; margin: 0; font-size: 18px;">AI for Designers</h3>
                <p>Learn how to use AI tools in your creative workflow.</p>
                
                <div class="bottom-row">
                    <div class="time">
                        <i>🕒</i> 5:00 PM
                    </div>
                    <button onclick="location.href='workshops_details.php'">View</button>
                </div>
            </div>

            </div>
    </div>

    <?php include("../components/footer.php"); ?>
</body>
</html>
