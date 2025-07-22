<?php
session_start();
require_once __DIR__ . '/../../php_logic/db.php';
$login_success = false;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        $error = 'All fields are required.';
    } else {
        $stmt = $conn->prepare('SELECT id, password FROM users WHERE username = ?');
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows === 1) {
            $stmt->bind_result($user_id, $hashed_password);
            $stmt->fetch();
            if (password_verify($password, $hashed_password)) {
                $_SESSION['username'] = $username;
                $_SESSION['user_id'] = $user_id;
                $login_success = true;
                echo '<meta http-equiv="refresh" content="1.5;url=/OnlineTech/index.php?page=home">';
            } else {
                $error = 'Invalid username or password.';
            }
        } else {
            $error = 'Invalid username or password.';
        }
        $stmt->close();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carr Tech Crunch</title>
  <link rel="icon" type="image/png" href="/OnlineTech/assets/images/logo.png">
  <link rel="stylesheet" href="login.css">
</head>
<body>
    <?php include(__DIR__ . '/../../includes/feedback/feedback-toast.php'); ?>
    <?php include(__DIR__ . '/../../includes/navbar/navbar.php'); ?>
    <form action="" id="login-form" method="POST">
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-full border flex flex-col gap-4">
            <div>
                <img src="/OnlineTech/assets/images/carr-tech-crunch-high-resolution-logo-transparent.png" width="50%" height="auto">

                <h1 class="text-white-100">Welcome Back</h1>
                <p class="text-gray-100">Please Enter your details</p>
            </div>
            <div class="flex flex-col gap-2">
                <label class="label">Username</label>
                <input type="text" name="username" class="input" placeholder="Enter your username" required />
            </div>

            <div class="flex flex-col gap-2">
                <label class="label">Password</label>
                <input type="password" name="password" class="input" placeholder="Enter your password" required />
            </div>

            <div class="flex justify-between">
                <span>
                    <input type="checkbox">
                    <label class="label" for="">Remember Me?</label>
                </span> 
            </div>

            <button class="btn btn-primary mt-4">Login</button>
            <div class="flex justify-center gap-2">
                <span><p class="label">Don't Have an account?</p></span> <span><a href="/OnlineTech/index.php?page=register">Sign Up</a></span>
            </div>
            <?php if ($login_success): ?>
                <div id="toast-feedback" class="toast-feedback toast-success" style="display:flex; margin-top: 1.5rem; justify-content: center; align-items: center; position: static; left: unset; top: unset; transform: none; min-width: 220px; max-width: 90vw; padding: 1em 2em; font-size: 1.08em; box-shadow: 0 4px 24px rgba(0,0,0,0.18); border-radius: 10px; background: #1fd18b; color: #fff;">
                    <span class="toast-icon" style="font-size:1.3em; flex-shrink:0;">✅</span>
                    Login successful! Welcome back.
                </div>
                <script>
                  setTimeout(function() {
                    window.location.href = "/OnlineTech/index.php?page=home";
                  }, 1700);
                </script>
            <?php elseif ($error): ?>
                <div class="text-red-500 text-center mt-4">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>
        </fieldset>
    </form>
    <div id="login-banner">
        <img src="/OnlineTech/assets/images/pexels-goumbik-574071.jpg" alt="">
    </div>
    <?php include(__DIR__ . '/../../includes/footer/footer.php'); ?>
</body>
</html>
