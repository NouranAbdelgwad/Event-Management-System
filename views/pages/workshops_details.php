<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1200">
    <title>AI Event - Laptop View</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }

        body {
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            min-width: 1200px;
            padding: 20px 0;
        }

        .container {
            width: 1100px; 
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 25px rgba(0,0,0,0.1);
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
        }

        .logo { color: #4B2A85; font-weight: bold; font-size: 1.5rem; }

        button {
            background: #4B2A85;
            color: white;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-weight: 600;
        }

        .btn-join-event { padding: 8px 25px; }
        .btn-workshop { padding: 12px 30px; font-size: 0.9rem; }
        .btn-card { padding: 6px 20px; font-size: 0.8rem; }

        .main-event {
            display: flex;
            padding: 20px 50px 60px;
            gap: 40px;
            align-items: center;
        }

        .main-img { width: 450px; border-radius: 20px; }

        .details h3 { font-size: 2rem; color: #333; margin-bottom: 5px; }
        .details .eng { color: #999; font-size: 0.9rem; margin-bottom: 15px; }
        .details .desc { color: #666; line-height: 1.6; font-size: 0.95rem; margin-bottom: 10px; }

        .time-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
        }

        .time-text { color: #4B2A85; font-weight: bold; font-size: 0.9rem; }

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
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
            padding-bottom: 15px;
        }

        .card img { width: 100%; height: 160px; object-fit: cover; }
        .card-info { padding: 15px; }
        .card-info h5 { margin-bottom: 5px; }
        .card-info p { color: #999; font-size: 0.8rem; margin-bottom: 15px; }

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

<div class="container">
    <header>
        <div class="logo">AI EVENT.</div>
        <button class="btn-join-event">Join Event</button>
    </header>

    <section class="main-event">
        <img src="assets/images/ai3.png" class="main-img">
        <div class="details">
            <h3>Data & AI Fundamentals</h3>
            <p class="eng">Eng. Ashraf Emad</p>
            <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                <div class="time-row">
                <span class="time-text">🕒 7:00 PM - 9:00 PM</span>
                <button class="btn-workshop">Join Workshop</button>
            </div>
        </div>
    </section>

    <div class="workshops-section">
        <div class="section-header">
            <h4>Other Workshops</h4>
            <a href="#" style="color: #4B2A85; font-weight: bold; text-decoration: none; font-size: 0.8rem;">See All</a>
        </div>
        <div class="grid">
            <div class="card">
                <img src="assets/images/ai1.png">
                <div class="card-info">
                    <h5>Introduction to AI</h5>
                    <p>Eng. Sarah Ahmed</p>
                </div>
                <div class="card-footer">
                    <span style="font-size: 0.75rem; font-weight: bold;">🕒 3:00 PM - 5:00 PM</span>
                    <button class="btn-card">Join</button>
                </div>
            </div>
            <div class="card">
                <img src="assets/images/ai2.png">
                <div class="card-info">
                    <h5>AI for Designers</h5>
                    <p>Eng. Zeyad Abdelazeem</p>
                </div>
                <div class="card-footer">
                    <span style="font-size: 0.75rem; font-weight: bold;">🕒 5:00 PM - 7:00 PM</span>
                    <button class="btn-card">Join</button>
                </div>
            </div>
            <div class="card">
                <img src="assets/images/ai3.png">
                <div class="card-info">
                    <h5>Data & AI Fundamentals</h5>
                    <p>Eng. Ashraf Emad</p>
                </div>
                <div class="card-footer">
                    <span style="font-size: 0.75rem; font-weight: bold;">🕒 7:00 PM - 9:00 PM</span>
                    <button class="btn-card">Join</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        © 2026 AI Event Platform. All rights reserved.
    </footer>
</div>

</body>
</html>
