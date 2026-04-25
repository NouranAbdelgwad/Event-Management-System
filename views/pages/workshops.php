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
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('../../assets/images/hero.png');
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
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
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
            <div class="logo">AI EVENT.</div>
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
            <div class="workshop-card">
                <img src="../../assets/images/hero.png" alt="Workshop">
                <div class="card-body">
                    <h3>Introduction to AI</h3>
                    <div class="instructor-name">Eng. Sarah Ahmed</div>
                    <div class="time"><i class="fa-regular fa-clock"></i> 3:00 PM - 5:00 PM</div>
                    <div class="bottom-row"><button>Join</button></div>
                </div>
            </div>

            <div class="workshop-card">
                <img src="assets/images/ai2.png" alt="Workshop">
                <div class="card-body">
                    <h3>AI for Designers</h3>
                    <div class="instructor-name">Eng. Zeyad Abdelazeem</div>
                    <div class="time"><i class="fa-regular fa-clock"></i> 5:00 PM - 7:00 PM</div>
                    <div class="bottom-row"><button>Join</button></div>
                </div>
            </div>

            <div class="workshop-card">
                <img src="assets/images/ai3.png" alt="Workshop">
                <div class="card-body">
                    <h3>Data & AI Fundamentals</h3>
                    <div class="instructor-name">Eng. Ashraf Emad</div>
                    <div class="time"><i class="fa-regular fa-clock"></i> 7:00 PM - 9:00 PM</div>
                    <div class="bottom-row"><button>Join</button></div>
                </div>
            </div>

            <div class="workshop-card">
                <img src="assets/images/ai3.png" alt="Workshop">
                <div class="card-body">
                    <h3>Data & AI Fundamentals</h3>
                    <div class="instructor-name">Eng. Ashraf Emad</div>
                    <div class="time"><i class="fa-regular fa-clock"></i> 7:00 PM - 9:00 PM</div>
                    <div class="bottom-row"><button>Join</button></div>
                </div>
            </div>

            <div class="workshop-card">
                <img src="assets/images/ai1.png" alt="Workshop">
                <div class="card-body">
                    <h3>Introduction to AI</h3>
                    <div class="instructor-name">Eng. Sarah Ahmed</div>
                    <div class="time"><i class="fa-regular fa-clock"></i> 3:00 PM - 5:00 PM</div>
                    <div class="bottom-row"><button>Join</button></div>
                </div>
            </div>

            <div class="workshop-card">
                <img src="assets/images/ai2.png" alt="Workshop">
                <div class="card-body">
                    <h3>AI for Designers</h3>
                    <div class="instructor-name">Eng. Zeyad Abdelazeem</div>
                    <div class="time"><i class="fa-regular fa-clock"></i> 5:00 PM - 7:00 PM</div>
                    <div class="bottom-row"><button>Join</button></div>
                </div>
            </div>

            <div class="workshop-card">
                <img src="assets/images/ai2.png" alt="Workshop">
                <div class="card-body">
                    <h3>AI for Designers</h3>
                    <div class="instructor-name">Eng. Zeyad Abdelazeem</div>
                    <div class="time"><i class="fa-regular fa-clock"></i> 5:00 PM - 7:00 PM</div>
                    <div class="bottom-row"><button>Join</button></div>
                </div>
            </div>
                <div class="workshop-card">
                <img src="assets/images/ai3.png" alt="Workshop">
                <div class="card-body">
                    <h3>Data & AI Fundamentals</h3>
                    <div class="instructor-name">Eng. Ashraf Emad</div>
                    <div class="time"><i class="fa-regular fa-clock"></i> 7:00 PM - 9:00 PM</div>
                    <div class="bottom-row"><button>Join</button></div>
                </div>
            </div>

            <div class="workshop-card">
                <img src="assets/images/ai1.png" alt="Workshop">
                <div class="card-body">
                    <h3>Introduction to AI</h3>
                    <div class="instructor-name">Eng. Sarah Ahmed</div>
                    <div class="time"><i class="fa-regular fa-clock"></i> 3:00 PM - 5:00 PM</div>
                    <div class="bottom-row"><button>Join</button></div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        © 2026 AI Event Platform. All rights reserved.
    </footer>

</body>
</html>
