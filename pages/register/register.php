<?php
session_start();
$response = include __DIR__ . '/../../php_logic/register_user.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carr Tech Crunch</title>
  <link rel="icon" type="image/png" href="/OnlineTech/assets/images/logo.png">
  <link rel="stylesheet" href="registration.css">
</head>
<body>
    <?php include(__DIR__ . '/../../includes/navbar/navbar.php'); ?>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!empty($response['success'])) {
            $_GET['feedback'] = 'registration-success';
            include(__DIR__ . '/../../includes/feedback/feedback-toast.php');
            echo '<script>setTimeout(function() { window.location.href = "/OnlineTech/index.php?page=login"; }, 1700);</script>';
            echo '</body></html>';
            exit;
        } elseif (!empty($response['error'])) {
            echo '<div class="toast toast-error">' . htmlspecialchars($response['error']) . '</div>';
        }
    }
    ?>
    <form action="" class="inline-block col-span-4 col-md-span-4 col-sm-span-4" id="registration-form" method="POST">
        <fieldset class="fieldset bg-base-200  rounded-box w-full gap-4">
            <div>
                <h1 class="text-white-100">Create Your Account</h1>
                <p class="text-gray-100">Start your website in seconds.</p>
            </div>
            <div class="flex flex-col gap-2">
                <label class="label">Your Username</label>
                <input type="text" name="username" class="input" placeholder="e.g. Sean Carr" required />
            </div>
            <div class="flex flex-col gap-2">
                <label class="label">Your password</label>
                <input type="password" name="password" class="input" placeholder="Enter your password" required />
            </div>
            <div class="flex flex-col gap-2">
                <label class="label">Confirm your password</label>
                <input type="password" name="confirm_password" class="input" placeholder="Enter your password again" required />
            </div>
            <div class="flex">
                <span class="flex gap-2">
                    <span style="margin-top: 2px;">
                        <input type="checkbox" style="text-align: top;">
                    </span>
                    <label class="label" for="">By signing up, you are creating a Carr Tech Crunch account, and you agree to Carr Tech Crunch Terms of Use and Privacy Policy?</label>
                </span>
            </div>
            <button class="btn btn-primary mt-4">Create an account</button>
            <div class="flex justify-center gap-2">
                <span><p class="label">Already have an account?</p></span> <span><a href="/OnlineTech/index.php?page=login">Login here</a></span>
            </div>
        </fieldset>
    </form>
    <div id="registration-banner">
        <div>
            <div class="registration-banner-item">
                <div>
                    <img src="/OnlineTech/assets/images/carr-tech-crunch-high-resolution-logo-transparent.png">
                </div>
                <div>
                    <h1>Explore the world of code, creativity, and connection.</h1>
                    <p>Welcome to Carr Tech Crunch where I share tutorials, reviews, and share tech stories to help developers learn, build, and grow.</p>
                </div>
            </div>
            <div class="registration-banner-item">
                <div class="section">
                    <h2>Get started quickly</h2>
                    <p>Explore coding tutorials and walkthroughs designed for developers at all levels. Whether you're using APIs or taking the low-code route, you'll find something useful here.</p>
                </div>
                <div class="section">
                    <h2>Support your own path</h2>
                    <p>Host your personal projects, snippets, and private experiments. This blog is a safe space to grow your skills publicly or privately.</p>
                </div>
                <div class="section">
                    <h2>Join the dev community</h2>
                    <p>Follow along with a growing community of self-learners, creators, and developers who build, break, and learn one tutorial at a time.</p>
                </div>
            </div>
        </div>
    </div>
    <?php include(__DIR__ . '/../../includes/footer/footer.php'); ?>
</body>
</html>


