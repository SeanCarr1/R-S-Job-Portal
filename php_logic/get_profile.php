<?php
// get_profile.php
// Fetches user info, completed tutorials, and completed exercises for the logged-in user (for non-AJAX usage)

include_once(__DIR__ . '/db.php');
include_once(__DIR__ . '/check_if_logged_in.php');

if (!isset($_SESSION['user_id'])) {
    // Redirect to login if not logged in
    header('Location: /OnlineTech/pages/login/login.php');
    exit;
}

$user_id = $_SESSION['user_id'];

// Fetch user info
$stmt = $conn->prepare('SELECT id, username FROM users WHERE id = ?');
$stmt->bind_param('i', $user_id);
$stmt->execute();
$user_result = $stmt->get_result();
$user_info = $user_result->fetch_assoc();

// Fetch completed tutorials
$stmt = $conn->prepare('SELECT t.id, t.title, t.link, utp.completed_at FROM tutorials t INNER JOIN user_tutorial_progress utp ON t.id = utp.tutorial_id WHERE utp.user_id = ?');
$stmt->bind_param('i', $user_id);
$stmt->execute();
$tutorials_result = $stmt->get_result();
$completed_tutorials = $tutorials_result->fetch_all(MYSQLI_ASSOC);

// Fetch completed exercises
$stmt = $conn->prepare('SELECT e.id, e.title, e.link, uep.completed_at FROM exercises e INNER JOIN user_exercise_progress uep ON e.id = uep.exercise_id WHERE uep.user_id = ?');
$stmt->bind_param('i', $user_id);
$stmt->execute();
$exercises_result = $stmt->get_result();
$completed_exercises = $exercises_result->fetch_all(MYSQLI_ASSOC);

// Make these variables available for include in profile.php
return [
    'user' => $user_info,
    'completed_tutorials' => $completed_tutorials,
    'completed_exercises' => $completed_exercises
];
