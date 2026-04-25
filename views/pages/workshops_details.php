<!DOCTYPE html> 
<html lang="ar" dir="rtl">  
<head>  
    <meta charset="UTF-8">  
    <title>AI Event Platform</title>  
    <link rel="stylesheet" href="style.css">  
    <style>
        :root {
--purple: #5a2d82;
--light-bg: #f8f9fa;
--text-gray: #666;
}

body {
font-family: sans-serif;
background-color: #fff;
margin: 0;
}

.container {
max-width: 90%;
margin: 0px auto;
padding: 0 20px;
}

.section-header {
display: flex;
justify-content: space-between;
align-items: center;
margin-bottom: 20px;
}

/* Main Card Styling */
.main-card {
display: flex;
background: #fff;
border-radius: 15px;
box-shadow: 0 4px 15px rgba(0,0,0,0.1);
overflow: hidden;
margin-bottom: 40px;
}

.card-image { flex: 1; background: #eee; }
.card-image img { width: 100%; height: 100%; object-fit: cover; }
.instructor{
  color: #888;
  font-size: 14px;
  margin-bottom: 10px;
}
.card-content { flex: 1.5; padding: 30px; }

.workshops-grid {
display: grid;
grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
gap: 15px;
}

.workshop-item {
background: #fff;
border-radius: 12px;
box-shadow: 0 2px 10px rgba(0,0,0,0.05);
overflow: hidden;
border: 1px solid #eee;
}
.workshop-item img{
  width: 100%;
  height: 120px;
  object-fit: cover;
}
.item-info h4{
  font-size: 14px;
  margin: 5px 0;
}
.item-info p{
  font-size: 12px;
  color: #888;
}

.btn-purple, .btn-main {
background-color: var(--purple);
color: white;
border: none;
padding: 10px 20px;
border-radius: 20px;
cursor: pointer;
}

.btn-sm {
background-color: var(--purple);
color: white;
border: none;
padding: 5px 15px;
border-radius: 8px;
}
.card-footer{
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 15px;
}
.main-footer {
background-color: var(--purple);
color: white;
text-align: center;
padding: 15px;
margin-top: 40px;
}
    </style>
</head>  
<body>  <div class="container">  
    <header class="section-header">  
        <h2>.AI EVENT</h2>  
        <button class="btn-main">Join Event</button>  
    </header>  

    <div class="main-card">  
        <div class="card-image">  
            <img src="IMG_20260423_200624_227.jpg">  
        </div>  
        <div class="card-content">  
            <h3>Data & AI Fundamentals</h3>  
            <p class="instructor">Eng. Ashraf Emad</p>  
            <p class="description">  
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut nisi ut aliquip ex ea commodo consequat  
            </p>  
            <div class="card-footer">  
                <span>🕒 7:00 PM  9:00 - PM</span>  
                <button class="btn-purple">Join Workshop</button>  
            </div>  
        </div>  
    </div>  

    <div class="other-workshops">  
        <div class="section-header">  
            <h3>Other Workshops</h3>  
            <a href="#" class="see-all">See All</a>  
        </div>  
          
        <div class="workshops-grid">  
            <div class="workshop-item">  
                <img src="IMG_20260423_200547_179.jpg">  
                <div class="item-info">  
                    <h4>Introduction to AI</h4>  
                    <p>Eng. Sarah Ahmed</p>  
                    <div class="item-footer">  
                        <span>🕒3:00 PM  5:00 - PM</span>  
                        <button class="btn-sm">Join</button>  
                    </div>  
                </div>  
            </div>  

            <div class="workshop-item">  
                <img src="IMG_20260423_200547_786.jpg">  
                <div class="item-info">  
                    <h4>AI for Designers</h4>  
                    <p>Eng. Zayad Abdelazeem</p>  
                    <div class="item-footer">  
                        <span>🕒5:00 PM  7:00 - PM</span>  
                        <button class="btn-sm">Join</button>  
                    </div>  
                </div>  
            </div>  

            <div class="workshop-item">  
                <img src="IMG_20260423_200624_227.jpg">  
                <div class="item-info">  
                    <h4>Data & AI Fundamentals</h4>  
                    <p>Eng. Ashraf Emad</p>  
                    <div class="item-footer">  
                        <span>🕒 5:00 PM 7:00 - PM</span>  
                        <button class="btn-sm">Join</button>  
                    </div>  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  

<footer class="main-footer">  
    .© 2026 AI Event Platform. All rights reserved
</footer>

</body>  
</html>