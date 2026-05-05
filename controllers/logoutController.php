<?php
session_start();

class LogoutController {
    public static function logout() {
        // 1. Clear all session variables
        $_SESSION = array();

        // 2. Destroy the session cookie in the browser
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        // 3. Destroy the session on the server
        session_destroy();

        // 4. Redirect to login or home
        header("Location: ../views/pages/login.php");
        exit();
    }
}

// Automatically trigger if this file is called
LogoutController::logout();