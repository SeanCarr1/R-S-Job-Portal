<?php
include(__DIR__ . '/../../php_logic/db.php');
include(__DIR__ . '/../../php_logic/check_if_logged_in.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carr Tech Crunch</title>
    <link rel="icon" type="image/png" href="/OnlineTech/assets/images/logo.png">
    <!-- <link rel="stylesheet" href="tutorials.css"> -->
    <link rel="stylesheet" href="/OnlineTech/assets/css/libraries/index.css">

    <style>
        section {
            grid-column: span 12;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 2rem;
            padding: 0 2rem;
        }
            .tutorials-title-wrapper {
                max-width: 400px;
            }
            .tutorials-cards-wrapper {
                display: flex;
                justify-content: center;
                gap: 1rem;
                flex-wrap: wrap;
            }
                .tutorials-card {
                    display: flex;
                    flex-direction: column;
                    border-radius: 12px;
                    max-width: 500px;
                    gap: 1rem;
                    width: 100%;
                    padding: 2rem 1.5rem;
                    background-color: var(--color-base-200);
                    box-shadow: 0 2px 12px 0 rgb(0 0 0 / 7%);
                    transition: box-shadow 0.2s;
                }
                    .tutorials-card:hover {
                        box-shadow: 0 4px 24px 0 rgb(0 0 0 / 12%);
                    }
                    .tutorials-card-label {
                        font-size: 1.25rem;
                        font-weight: 600;
                        margin-bottom: 0.25rem;
                    }
                    .tutorials-card-desc {
                        color: var(--color-text);
                        opacity: 0.85;
                        font-size: 1rem;
                    }
                    .tutorials-card-content {
                        display: flex;
                        flex-direction: column;
                    }
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
.toast-icon {
  font-size: 1.3em;
  flex-shrink: 0;
}
    </style>
</head>
<body>
<?php
if (isset($_GET['feedback']) && $_GET['feedback'] === 'tutorial_completed') {
    echo '<div id="toast-tutorial-completed" class="toast-feedback toast-success" style="display:flex;">
        <span class="toast-icon">✔️</span>
        Tutorial completed! Well done.
    </div>';
    echo '<script>
      setTimeout(function() {
        var toast = document.getElementById("toast-tutorial-completed");
        if (toast) toast.style.opacity = "0";
      }, 2200);
      setTimeout(function() {
        var toast = document.getElementById("toast-tutorial-completed");
        if (toast) toast.style.display = "none";
      }, 2700);
    </script>';
}
?>
     <?php include(__DIR__ . '/../../includes/navbar/navbar.php'); ?>
    <section>
        <div class="tutorials-title-wrapper">
            <h1 class="tutorials-title">Tutorials</h1>
            <p>Start your Python journey! Choose a tutorial below to get step-by-step guidance for beginners. More tutorials coming soon.</p>
        </div>
        <div class="tutorials-cards-wrapper">
            <div class="tutorials-card">
                <div class="tutorials-card-content">
                    <svg class="tutorials-card-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" width="32" height="32"><rect width="24" height="24" rx="4" fill="#232b3b"/><path stroke="#4fc3f7" stroke-width="2" d="M4 11h16M5 15h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1Zm7 0v5m-3 0h6"/></svg>
                    <span class="tutorials-card-label">Python Installation</span>
                    <span class="tutorials-card-desc">Install Python on Windows, Mac, or Linux</span>
                </div>
                <div class="tutorials-card-action">
                    <a class="btn btn-primary" href="/OnlineTech/index.php?page=tutorials/python-installation">Start Tutorial</a>
                </div>
            </div>
            <div class="tutorials-card">
                <div class="tutorials-card-content">
                    <svg class="tutorials-card-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" width="32" height="32"><rect width="24" height="24" rx="4" fill="#232b3b"/><path stroke="#4fc3f7" stroke-width="2" d="M16.872 9.687 20 6.56 17.44 4 4 17.44 6.56 20 16.873 9.687Zm0 0-2.56-2.56"/></svg>
                    <span class="tutorials-card-label">Virtual Environment Setup</span>
                    <span class="tutorials-card-desc">Create isolated Python environments for your projects</span>
                </div>
                <div class="tutorials-card-action">
                    <a class="btn btn-primary" href="/OnlineTech/index.php?page=tutorials/venv-setup">Start Tutorial</a>
                </div>
            </div>
            <div class="tutorials-card">
                <div class="tutorials-card-content">
                    <svg class="tutorials-card-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" width="32" height="32"><rect width="24" height="24" rx="4" fill="#232b3b"/><path stroke="#4fc3f7" stroke-width="2" d="M5 19V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v13H7a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h12M9 3v14m7 0v4"/></svg>
                    <span class="tutorials-card-label">First Hello World</span>
                    <span class="tutorials-card-desc">Write and run your first Python program</span>
                </div>
                <div class="tutorials-card-action">
                    <a class="btn btn-primary" href="/OnlineTech/index.php?page=tutorials/hello-world">Start Tutorial</a>
                </div>
            </div>
        </div>
        <div class="tutorials-divider"></div>
    </section>
    <?php include(__DIR__ . '/../../includes/footer/footer.php'); ?>
</body>
</html>

