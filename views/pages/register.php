<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Event - Register</title>
    <link rel="stylesheet" href="../../assets/css/style.css"> </head>
<body>

    <header class="navbar">
        <div class="logo">
            <h2>AI EVENT.</h2>
        </div>
    </header>

    <main class="menna-reg-container">
        
        <section class="menna-login-content">
            <h1 class="menna-welcome-title">Welcome to our AI Event</h1>
            
            <form action="register_process.php" method="POST" enctype="multipart/form-data" style="width: 100%; display: flex; flex-direction: column; align-items: center;">
                
                <input type="text" name="username" class="menna-input-field" placeholder="Enter your name" required>
                
                <input type="email" name="email" class="menna-input-field" placeholder="Enter your email" required>
                
                <input type="password" name="password" class="menna-input-field" placeholder="Enter your password" required>
                
                <div class="menna-file-input-wrapper">
                    <label for="id-file" class="menna-file-btn">Select File</label>
                    <input type="file" id="id-file" name="user_id_img" hidden onchange="updateFileName()">
                    <span id="file-name-display" class="menna-file-text">Enter your front ID</span>
                </div>

                <button type="submit" class="menna-submit-btn">Register</button>
            </form>

            <p class="menna-register-text">
                Already have <a href="login.php" class="menna-register-link">account?</a>
            </p>
        </section>

        <section class="menna-image-section">
            <img src="../../assets/images/ai-image.png" alt="AI Graphic" class="menna-main-img">
        </section>

    </main>

    <script>
        function updateFileName() {
            const fileInput = document.getElementById('id-file');
            const fileNameDisplay = document.getElementById('file-name-display');
            if (fileInput.files.length > 0) {
                fileNameDisplay.textContent = fileInput.files[0].name;
                fileNameDisplay.style.color = "#472480";
            }
        }
    </script>

</body>
</html>