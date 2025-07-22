<?php
session_start();
include_once(__DIR__ . '/db.php');
include_once(__DIR__ . '/check_if_logged_in.php');

if (!isset($_SESSION['user_id'])) {
    header('Location: /OnlineTech/pages/login/login.php');
    exit;
}

$user_id = $_SESSION['user_id'];
$exercise_id = isset($_POST['exercise_id']) ? intval($_POST['exercise_id']) : 0;
$redirect = isset($_POST['redirect']) ? $_POST['redirect'] : '/OnlineTech/pages/exercises/exercises.php';

// Check if all tasks are completed
$all_completed = true;
if (isset($_POST['tasks']) && is_array($_POST['tasks'])) {
    foreach ($_POST['tasks'] as $task_completed) {
        if ($task_completed !== '1') {
            $all_completed = false;
            break;
        }
    }
} else {
    $all_completed = false;
}

if ($exercise_id > 0 && $all_completed) {
    // Prevent duplicate entries
    $stmt = $conn->prepare('SELECT id FROM user_exercise_progress WHERE user_id = ? AND exercise_id = ?');
    $stmt->bind_param('ii', $user_id, $exercise_id);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows === 0) {
        $stmt_insert = $conn->prepare('INSERT INTO user_exercise_progress (user_id, exercise_id) VALUES (?, ?)');
        $stmt_insert->bind_param('ii', $user_id, $exercise_id);
        $stmt_insert->execute();
        $stmt_insert->close();
    }
    $stmt->close();
    // Append feedback param correctly
    $redirect_feedback = strpos($redirect, '?') === false
        ? $redirect . '?feedback=exercise_finished'
        : $redirect . '&feedback=exercise_finished';

    header("Location: $redirect_feedback");
    exit;
} else {
    // Not all tasks completed, redirect back with error
    $redirect_with_error = strpos($redirect, '?') === false ? "$redirect?error=incomplete" : "$redirect&error=incomplete";
    header("Location: $redirect_with_error");
    exit;
}
