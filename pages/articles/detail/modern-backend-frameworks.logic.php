<?php
require_once __DIR__ . '/../../../php_logic/db.php';
require_once __DIR__ . '/../../../php_logic/check_if_logged_in.php';
$article_slug = 'modern-backend-frameworks';
$comment_error = '';
$comment_success = false;
if (isset($_POST['comment_text'])) {
    $comment_text = trim($_POST['comment_text']);
    $user_id = $_SESSION['user_id'] ?? null;
    if ($comment_text === '') {
        $comment_error = 'Comment cannot be empty.';
    } elseif (!$user_id) {
        $comment_error = 'User ID not set in session.';
    } else {
        $stmt = $conn->prepare('INSERT INTO comments (article_slug, user_id, comment_text) VALUES (?, ?, ?)');
        if (!$stmt) {
            $comment_error = 'Prepare failed: ' . $conn->error;
        } else {
            $stmt->bind_param('sis', $article_slug, $user_id, $comment_text);
            if ($stmt->execute()) {
                $stmt->close();
                $_GET['feedback'] = 'comment-success';
                echo '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Carr Tech Crunch</title><link rel="icon" type="image/png" href="/OnlineTech/assets/images/logo.png"><link rel="stylesheet" href="../articles.css"><link rel="stylesheet" href="modern-backend-frameworks.css"></head><body style="background: var(--color-base-200, #181818);">';
                include(__DIR__ . '/../../../includes/feedback/feedback-toast.php');
                echo '<script>setTimeout(function() { window.location.href = "' . htmlspecialchars($_SERVER['REQUEST_URI']) . '"; }, 1700);</script>';
                echo '</body></html>';
                exit;
            } else {
                $comment_error = 'Failed to add comment: ' . $stmt->error . ' (user_id: ' . htmlspecialchars($user_id) . ', comment: ' . htmlspecialchars($comment_text) . ')';
                $stmt->close();
            }
        }
    }
}
$stmt = $conn->prepare('SELECT c.comment_text, c.created_at, u.username FROM comments c JOIN users u ON c.user_id = u.id WHERE c.article_slug = ? ORDER BY c.created_at ASC');
$stmt->bind_param('s', $article_slug);
$stmt->execute();
$result = $stmt->get_result();
$comments = $result->fetch_all(MYSQLI_ASSOC);
$stmt->close();
