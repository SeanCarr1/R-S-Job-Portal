<?php
session_start();
session_unset();
session_destroy();
// Set the feedback parameter so the toast will show
$_GET['feedback'] = 'logout-success';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logout</title>
  <link rel="icon" type="image/png" href="/OnlineTech/assets/images/logo.png">
  <link rel="stylesheet" href="/OnlineTech/pages/login/login.css">
</head>
<body style="background: var(--color-base-200, #181818);">
  <?php include(__DIR__ . '/../includes/feedback/feedback-toast.php'); ?>
  <script>
    setTimeout(function() {
      window.location.href = "/OnlineTech/index.php?page=login";
    }, 1700);
  </script>
</body>
</html>
