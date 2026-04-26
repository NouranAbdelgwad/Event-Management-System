<?php
session_start();

require_once __DIR__ . '/../../config/db_connection.php';
require_once __DIR__ . '/../../controllers/RegisterController.php';

$errors = [];
$old    = ['username' => '', 'email' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = (new RegisterController($connection))->register($_POST, $_FILES);

    if ($result['success']) { header('Location: ../../index.php'); exit; }

    $errors          = $result['errors'];
    $old['username'] = htmlspecialchars(trim($_POST['username'] ?? ''));
    $old['email']    = htmlspecialchars(trim($_POST['email']    ?? ''));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Event - Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>

<header class="navbar">
    <div class="logo"><h2>AI EVENT.</h2></div>
</header>

<main class="menna-reg-container">

    <section class="menna-login-content">
        <h1 class="menna-welcome-title">Welcome to our AI Event</h1>

        <form action="" method="POST" enctype="multipart/form-data"
              style="width:100%;display:flex;flex-direction:column;align-items:center;">

            <input type="text" name="username"
                   class="menna-input-field <?= isset($errors['username']) ? 'invalid' : '' ?>"
                   placeholder="Enter your name" value="<?= $old['username'] ?>">
            <?php if (isset($errors['username'])): ?>
                <span class="menna-error"><?= $errors['username'] ?></span>
            <?php endif; ?>

            <input type="email" name="email"
                   class="menna-input-field <?= isset($errors['email']) ? 'invalid' : '' ?>"
                   placeholder="Enter your email" value="<?= $old['email'] ?>">
            <?php if (isset($errors['email'])): ?>
                <span class="menna-error"><?= $errors['email'] ?></span>
            <?php endif; ?>

            <div style="position:relative; width:100%; max-width:380px;">
                <input type="password" id="password" name="password"
                       class="menna-input-field <?= isset($errors['password']) ? 'invalid' : '' ?>"
                       placeholder="Enter your password" style="width:100%;">
                <i class="fas fa-eye" id="togglePassword"
                   style="position:absolute; right:20px; top:30%; cursor:pointer; color:#7b61ff; font-size:18px;"></i>
            </div>

            <div class="menna-hint">
                <div class="menna-hint-item"><div class="menna-hint-bar"></div><span>8+ chars</span></div>
                <div class="menna-hint-item"><div class="menna-hint-bar"></div><span>Uppercase</span></div>
                <div class="menna-hint-item"><div class="menna-hint-bar"></div><span>Number</span></div>
                <div class="menna-hint-item"><div class="menna-hint-bar"></div><span>Symbol</span></div>
            </div>
            <?php if (isset($errors['password'])): ?>
                <span class="menna-error"><?= $errors['password'] ?></span>
            <?php endif; ?>

            <label for="id-file" class="menna-file-upload <?= isset($errors['file']) ? 'invalid' : '' ?>">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#472480" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="3" width="18" height="14" rx="2"/>
                    <circle cx="8.5" cy="8.5" r="1.5"/>
                    <polyline points="21 15 16 10 5 21"/>
                </svg>
                <div>
                    <p id="file-label" class="title">Upload your front ID</p>
                    <p class="subtitle">JPG or PNG · max 2MB</p>
                </div>
                <input type="file" id="id-file" name="user_id_img" accept=".jpg,.jpeg,.png" hidden onchange="updateFileName()">
                <span class="menna-file-browse">Browse</span>
            </label>

            <div id="file-preview" class="menna-file-success">
                ✓ <span id="file-name-display"></span>
                <span class="menna-file-clear" onclick="clearFile()">✕</span>
            </div>

            <?php if (isset($errors['file'])): ?>
                <span class="menna-error"><?= $errors['file'] ?></span>
            <?php endif; ?>

            <button type="submit" class="menna-submit-btn">Register</button>
        </form>

        <p class="menna-register-text">
            Already have an <a href="login.php" class="menna-register-link">account?</a>
        </p>
    </section>

    <section class="menna-image-section">
        <img src="../../assets/images/ai-image.png" alt="AI Graphic" class="menna-main-img">
    </section>

</main>

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password       = document.querySelector('#password');
    

    togglePassword.addEventListener('click', function () {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });

    function updateFileName() {
        var input   = document.getElementById('id-file');
        var label   = document.getElementById('file-label');
        var preview = document.getElementById('file-preview');
        var display = document.getElementById('file-name-display');
        if (input.files[0].size > 2097152) {
            label.textContent = 'File too large (max 2MB)';
            label.style.color = '#c0392b';
            input.value       = '';
            return;
        }
        display.textContent   = input.files[0].name;
        preview.style.display = 'flex';
        label.textContent     = 'ID uploaded ✓';
        label.style.color     = '#2e7d32';
    }

    function clearFile() {
        document.getElementById('id-file').value              = '';
        document.getElementById('file-preview').style.display = 'none';
        document.getElementById('file-label').textContent     = 'Upload your front ID';
        document.getElementById('file-label').style.color     = '#472480';
    }

    const passwordInput = document.querySelector('#password');
const bars = document.querySelectorAll('.menna-hint-bar');
const labels = document.querySelectorAll('.menna-hint-item span');

passwordInput.addEventListener('input', function () {
    const val = this.value;

    const checks = [
        val.length >= 8,
        /[A-Z]/.test(val),
        /[0-9]/.test(val),
        /[\W_]/.test(val)
    ];

    checks.forEach(function(passed, i) {
        bars[i].style.background   = passed ? '#472480' : '#e0d9f0';
        labels[i].style.color      = passed ? '#472480' : '#bbb';
    });
});
</script>

</body>
</html>