<?php
session_start();
include_once(__DIR__ . '/db.php');
include_once(__DIR__ . '/check_if_logged_in.php');

if (!isset($_SESSION['user_id'])) {
    header('Location: /OnlineTech/pages/login/login.php');
    exit;
}

$user_id = $_SESSION['user_id'];
$tutorial_id = isset($_POST['tutorial_id']) ? intval($_POST['tutorial_id']) : 0;
$redirect = isset($_POST['redirect']) ? $_POST['redirect'] : '/OnlineTech/pages/tutorials/tutorials.php';

if ($tutorial_id > 0) {
    // Prevent duplicate entries
    $stmt = $conn->prepare('SELECT id FROM user_tutorial_progress WHERE user_id = ? AND tutorial_id = ?');
    $stmt->bind_param('ii', $user_id, $tutorial_id);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows === 0) {
        $stmt_insert = $conn->prepare('INSERT INTO user_tutorial_progress (user_id, tutorial_id) VALUES (?, ?)');
        $stmt_insert->bind_param('ii', $user_id, $tutorial_id);
        $stmt_insert->execute();
        $stmt_insert->close();
    }
    $stmt->close();
}

// Append feedback param correctly
$redirect_feedback = strpos($redirect, '?') === false
    ? $redirect . '?feedback=tutorial_completed'
    : $redirect . '&feedback=tutorial_completed';

header("Location: $redirect_feedback");
exit;
