<?php
require_once __DIR__ . '/db.php';

$response = [
    'success' => false,
    'error' => ''
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    if ($username === '' || $password === '' || $confirm_password === '') {
        $response['error'] = 'All fields are required.';
    } elseif ($password !== $confirm_password) {
        $response['error'] = 'Passwords do not match.';
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare('INSERT INTO users (username, password) VALUES (?, ?)');
        $stmt->bind_param('ss', $username, $hashed_password);
        if ($stmt->execute()) {
            $response['success'] = true;
        } else {
            $response['error'] = 'Registration failed: ' . $conn->error;
        }
        $stmt->close();
    }
}
return $response;
