<?php
// Show feedback toast if present
include(__DIR__ . '/includes/feedback/feedback-toast.php');

// Redirect users to the correct page using the standard folder structure
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$target = 'pages/' . $page . '/' . basename($page) . '.php';

if (file_exists($target)) {
    header('Location: ' . $target);
    exit;
} else {
    echo "<h1>404 - Page not found</h1>";
}
