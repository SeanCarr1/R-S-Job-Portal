<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo "<script>alert('You must be logged in to access this page.'); window.location.href='index.php?page=login';</script>";
    exit;
}
include(__DIR__ . '/../../../php_logic/db.php');
include(__DIR__ . '/../../../php_logic/check_if_logged_in.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carr Tech Crunch</title>
  <link rel="stylesheet" href="../tutorial-template.css">
</head>
<body>
<?php include(__DIR__ . '/../../../includes/feedback/feedback-toast.php'); ?>
  <?php include(__DIR__ . '/../../../includes/navbar/navbar.php'); ?>
  <section class="tutorial-section">
    <div class="tutorial-header">
      <h1 class="tutorial-title">Getting Started with Python</h1>
      <p class="tutorial-description">Python is a versatile, high-level programming language that is widely supported across all major operating systems.</p>
      <ul class="tutorial-list">
        <li>Run Python online</li>
        <li>Install Python on your computer</li>
      </ul>
      <p class="tutorial-description">In this tutorial, you will learn both methods.</p>
    </div>

    <div class="tutorial-block">
      <h2 class="tutorial-block-title">Run Python Online</h2>
      <p class="tutorial-block-desc">To execute Python code, you need to have a Python interpreter installed on your system. However, if you want to start immediately, you can use a fre onine compiler <a class="tutorial-link" href="https://www.online-python.com/" target="_blank"> or online Python editor</a>.</p>
      <div class="tutorial-block-content">
        <img class="tutorial-block-img" src="/OnlineTech/assets/images/compiler.png" alt="Online Python Editor">
        <div class="tutorial-block-caption">Online Python Editor Example</div>
      </div>
      <div class="tutorial-block-info">The online editor enables you to run Python code directly in your browser—no installation required.</div>
    </div>

    <div class="tutorial-block">
      <h2 class="tutorial-block-title">Install Python on Your Computer</h2>
      <p class="tutorial-block-desc">For those who prefer to install Python on your computer, this guide will walk you through the installation process on Windows, macOS, and Linux (Ubuntu).</p>
      <div class="tutorial-block-content">
        <div class="tutorial-tabs">
          <button class="tutorial-tab active" data-tab="windows">Windows</button>
          <button class="tutorial-tab" data-tab="macos">macOS</button>
          <button class="tutorial-tab" data-tab="linux">Linux</button>
        </div>
        <div class="tutorial-tab-content tutorial-tab-windows active">
          <div class="tutorial-block-list">
            <h3>Step 1: Install VS Code</h3>
            <p>Go to the VS Code <a class="tutorial-link" href="https://code.visualstudio.com/" target="_blank">Official website</a> and download the Windows installer. Once the download is complete, run the installer and follow the installation process.</p>
            <p>Click <b>Finish</b> to complete the installation process.</p>
            <h3>Step 2: Download the Python Installer File</h3>
            <p>Go to the official <a class="tutorial-link" href="https://www.python.org/downloads/" target="_blank">Python website</a> and download the latest version for Windows.</p>
            <img class="tutorial-block-img" src="/OnlineTech/assets/images/python.png" alt="Python Download Page">
            <div class="tutorial-block-caption">Python Download Page</div>
            <h3>Step 3: Run the Installer</h3>
            <p>Go to your <b>download</b> folder and run the installer you just downloaded. Allow access if prompted.</p>
            <h3>Step 4: Install Python</h3>
            <p>Follow the prompts. <b>Make sure to check "Add Python to PATH"</b> before clicking Install.</p>
            <h3>Step 5: Verify your installation</h3>
            <div class="tutorial-block-code">python --version<br>python3 --version</div>
            <div class="tutorial-block-info">If you see a version number, Python is installed correctly!</div>
          </div>
        </div>
        <div class="tutorial-tab-content tutorial-tab-macos">
          <div class="tutorial-block-list">
            <h3>Step 1: Download the Python Installer File</h3>
            <p>Go to the official <a class="tutorial-link" href="https://www.python.org/downloads/" target="_blank">Python website</a> and download the latest version for macOS.</p>
            <h3>Step 2: Run the Installer</h3>
            <p>Open the downloaded <code>.pkg</code> file and follow the installation instructions.</p>
            <h3>Step 3: Verify your installation</h3>
            <div class="tutorial-block-code">python3 --version</div>
            <div class="tutorial-block-info">If you see a version number, Python is installed correctly!</div>
          </div>
        </div>
        <div class="tutorial-tab-content tutorial-tab-linux">
          <div class="tutorial-block-list">
            <h3>Step 1: Open your terminal</h3>
            <h3>Step 2: Install Python</h3>
            <div class="tutorial-block-code">sudo apt install python3</div>
            <h3>Step 3: Verify your installation</h3>
            <div class="tutorial-block-code">python3 --version</div>
            <div class="tutorial-block-info">If you see a version number, Python is installed correctly!</div>
          </div>
        </div>
      </div>
    </div>
    <div class="tutorial-nav-row">
      <a href="/OnlineTech/pages/tutorials/tutorials.php" class="tutorial-nav-btn tutorial-nav-prev">
        <span class="tutorial-nav-arrow">&#8592;</span>
        <span>
          <span class="tutorial-nav-label">Tutorials</span>
          <span class="tutorial-nav-title">Introduction</span>
        </span>
      </a>
      <form method="POST" action="/OnlineTech/php_logic/finish_tutorial.php" style="display:inline;">
        <input type="hidden" name="tutorial_id" value="1">
        <input type="hidden" name="redirect" value="/OnlineTech/pages/tutorials/venv-setup/venv-setup.php?feedback=tutorial_completed">
        <button type="submit" class="tutorial-nav-btn tutorial-nav-next" style="background: var(--color-success); color: #fff;">
          <span>
            <span class="tutorial-nav-label" style="text-align: right;">Next</span>
            <span class="tutorial-nav-title">Virtual Environment Setup</span>
          </span>
          <span class="tutorial-nav-arrow">&#8594;</span>
        </button>
      </form>
    </div>
  </section>

  <?php include(__DIR__ . '/../../../includes/footer/footer.php'); ?>

  <script src="python-installation.js"></script>
</body>
</html>