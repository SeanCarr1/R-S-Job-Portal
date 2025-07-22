<?php
require_once __DIR__ . '/db.php';
header('Content-Type: application/json');

$article_slug = $_GET['article_slug'] ?? '';
if ($article_slug === '') {
    http_response_code(400);
    echo json_encode(['error' => 'Missing article']);
    exit;
}

$stmt = $pdo->prepare('SELECT c.comment_text, c.created_at, u.username FROM comments c JOIN users u ON c.user_id = u.id WHERE c.article_slug = ? ORDER BY c.created_at ASC');
$stmt->execute([$article_slug]);
$comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode(['comments' => $comments]);
