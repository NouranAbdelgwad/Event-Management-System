<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location: home.php');

    exit();
}  
require_once __DIR__ . '/../../config/db_connection.php';
require_once __DIR__ . '/../../controllers/LoginController.php';

$errors = [];
$old    = ['password' => '', 'email' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = (new loginController($connection))->login($_POST);
 
    if ($result['success']) {
        header('Location: home.php');
        exit;
    }

    $errors          = $result['errors'];
    $old['password'] = htmlspecialchars(trim($_POST['password'] ?? ''));
    $old['email']    = htmlspecialchars(trim($_POST['email']    ?? ''));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Event - Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body class="login-page-body">

    <header class="navbar">
        <div class="logo">
            <h2 class="menna-logo-text">AI EVENT.</h2>
        </div>
    </header>

    <main class="menna-login-container">
        <section class="menna-login-content">
            <h1 class="menna-welcome-title">Welcome back to AI Event</h1>

            <form method="POST" style="width: 100%; display: flex; flex-direction: column; align-items: center;">
                <input name="email" type="email" class="menna-input-field" placeholder="Enter your email" required value="<?= $old['email'] ?>">
                <div style="position: relative; width: 100%; max-width: 380px;">
                    <input name='password' type="password" id="password" class="menna-input-field" placeholder="Enter your password" required style="width: 100%;" value="<?= $old['password'] ?>">

                    <i class="fas fa-eye" id="togglePassword" style="position: absolute; right: 20px; top: 30%; cursor: pointer; color: #7b61ff; font-size: 18px;"></i>
                    <?php if (count($errors) > 0): ?>
                    <span class="menna-error"><?= $errors[0] ?></span>
                    <?php endif; ?>
                </div>

                <button type="submit" class="menna-submit-btn">Login</button>
            </form>

            <p class="menna-register-text">
                Don't have <a href="../../views/pages/register.php" class="menna-register-link">account?</a>
            </p>
        </section>

        <section class="menna-image-section">
            <img src="../../assets/images/ai-image.png" alt="AI Graphic" class="menna-main-img">
        </section>

        <script>
            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#password');

            togglePassword.addEventListener('click', function() {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);

                if (type === 'text') {
                    this.classList.remove('fa-eye-slash');
                    this.classList.add('fa-eye');
                } else {
                    this.classList.remove('fa-eye');
                    this.classList.add('fa-eye-slash');
                }
            });
        </script>
    </main>

</body>

</html>