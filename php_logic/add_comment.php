<?php
session_start();
require_once __DIR__ . '/db.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

if (!isset($_SESSION['user_id'])) {
    http_response_code(401);
    echo json_encode(['error' => 'Not authenticated']);
    exit;
}

$article_slug = $_POST['article_slug'] ?? '';
$comment_text = trim($_POST['comment_text'] ?? '');
$user_id = $_SESSION['user_id'];

if ($article_slug === '' || $comment_text === '') {
    http_response_code(400);
    echo json_encode(['error' => 'Missing article or comment']);
    exit;
}

$stmt = $pdo->prepare('INSERT INTO comments (article_slug, user_id, comment_text) VALUES (?, ?, ?)');
if ($stmt->execute([$article_slug, $user_id, $comment_text])) {
    echo json_encode(['success' => true]);
} else {
    http_response_code(500);
    echo json_encode(['error' => 'Failed to add comment']);
}
