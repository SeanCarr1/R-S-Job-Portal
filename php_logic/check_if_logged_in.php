<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['username'])) {
    // Avoid redirect loop if already on login page
    $currentPage = $_GET['page'] ?? '';
    $isLoginPage = ($currentPage === 'login');
    // If not routed through index.php?page=..., try to detect direct access to PHP files
    $isDirectLogin = (basename($_SERVER['PHP_SELF']) === 'login.php');
    if (!$isLoginPage && !$isDirectLogin) {
        // Always use JS+toast for POST, and for GET if not routed through index.php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' || strpos($_SERVER['PHP_SELF'], '/pages/') !== false) {
            $_GET['feedback'] = 'must-login';
            echo '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Login Required</title><link rel="icon" type="image/png" href="/OnlineTech/assets/images/logo.png"><link rel="stylesheet" href="/OnlineTech/pages/login/login.css"></head><body style="background: var(--color-base-200, #181818);">';
            include(__DIR__ . '/../includes/feedback/feedback-toast.php');
            echo '<script>setTimeout(function() { window.location.href = "/OnlineTech/index.php?page=login"; }, 1700);</script>';
            echo '</body></html>';
            exit;
        } else {
            header('Location: /OnlineTech/index.php?page=login&feedback=must-login');
            exit;
        }
    }
}
?>