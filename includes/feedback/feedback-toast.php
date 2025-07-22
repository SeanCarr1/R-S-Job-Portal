<?php
// feedback-toast.php
// Usage: include this file at the top of any page to show a toast if ?feedback=... is set
$feedbackMessages = [
    'tutorial_completed' => [
        'icon' => '✔️',
        'class' => 'toast-success',
        'text' => 'Tutorial completed! Well done.'
    ],
    'exercise_finished' => [
        'icon' => '🏁',
        'class' => 'toast-success',
        'text' => 'Exercise finished! Great job.'
    ],
    'login-success' => [
        'icon' => '✅',
        'class' => 'toast-success',
        'text' => 'Login successful! Welcome back.'
    ],
    'logout-success' => [
        'icon' => '👋',
        'class' => 'toast-success',
        'text' => 'Logout successful! See you next time.'
    ],
    'registration-success' => [
        'icon' => '🎉',
        'class' => 'toast-success',
        'text' => 'Registration successful! You can now log in.'
    ],
    'comment-success' => [
        'icon' => '💬',
        'class' => 'toast-success',
        'text' => 'Comment added successfully!'
    ],
    'must-login' => [
        'icon' => '🔒',
        'class' => 'toast-error',
        'text' => 'You must be logged in to perform this action.'
    ],
    // Add more feedback types here as needed
];
if (isset($_GET['feedback']) && isset($feedbackMessages[$_GET['feedback']])) {
    $msg = $feedbackMessages[$_GET['feedback']];
    echo '<div id="toast-feedback" class="toast-feedback ' . $msg['class'] . '" style="display:flex;">
        <span class="toast-icon">' . $msg['icon'] . '</span>
        ' . $msg['text'] . '
    </div>';
    echo '<script>
      setTimeout(function() {
        var toast = document.getElementById("toast-feedback");
        if (toast) toast.style.opacity = "0";
      }, 1600);
      setTimeout(function() {
        var toast = document.getElementById("toast-feedback");
        if (toast) toast.style.display = "none";
      }, 2000);
    </script>';
}
?>
<style>
.toast-feedback {
  position: fixed;
  top: 32px;
  left: 50%;
  transform: translateX(-50%);
  min-width: 260px;
  max-width: 90vw;
  z-index: 9999;
  padding: 1em 2em;
  border-radius: 10px;
  font-size: 1.08em;
  display: flex;
  align-items: center;
  gap: 0.7em;
  box-shadow: 0 4px 24px rgba(0,0,0,0.18);
  border-left: 5px solid #1fd18b;
  background: #1fd18b;
  color: #fff;
  opacity: 1;
  transition: opacity 0.4s;
  font-family: 'Inter', Arial, sans-serif;
  pointer-events: none;
}
.toast-success {
  background: #1fd18b;
  border-color: #fff;
  color: #fff;
}
.toast-error {
  background: #ff4d4d;
  border-color: #fff;
  color: #fff;
}
.toast-icon {
  font-size: 1.3em;
  flex-shrink: 0;
}
</style>
