<?php
// update_profile.php
// Updates user info for the logged-in user (non-AJAX, form POST)

include_once(__DIR__ . '/db.php');
include_once(__DIR__ . '/check_if_logged_in.php');

if (!isset($_SESSION['user_id'])) {
    header('Location: /OnlineTech/pages/login/login.php');
    exit;
}

$user_id = $_SESSION['user_id'];

// Only allow updating name and email for now
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';

// Basic validation
if (empty($name) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Redirect back with error
    header('Location: /OnlineTech/pages/profile/profile.php?update=error');
    exit;
}

// Sanitize input
$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');

// Update user info
$stmt = $conn->prepare('UPDATE users SET name = ?, email = ? WHERE id = ?');
$stmt->bind_param('ssi', $name, $email, $user_id);
if ($stmt->execute()) {
    // Redirect back with success
    header('Location: /OnlineTech/pages/profile/profile.php?update=success');
    exit;
} else {
    // Redirect back with error
    header('Location: /OnlineTech/pages/profile/profile.php?update=error');
    exit;
}
