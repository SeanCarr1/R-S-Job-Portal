<?php
include(__DIR__ . '/../../../php_logic/check_if_logged_in.php');
include(__DIR__ . '/../../../php_logic/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carr Tech Crunch</title>
  <link rel="stylesheet" href="../tutorial-template.css">
  <style>
    /* Add any venv-setup specific styles here if needed */
  </style>
</head>
<body>
<?php include(__DIR__ . '/../../../includes/feedback/feedback-toast.php'); ?>
  <?php include(__DIR__ . '/../../../includes/navbar/navbar.php'); ?>
  <section class="tutorial-section">
    <div class="tutorial-header">
      <h1 class="tutorial-title">Setting Up a Python Virtual Environment</h1>
      <p class="tutorial-description">A virtual environment allows you to manage dependencies for your Python projects in isolation, so you don't pollute your global Python installation.</p>
      <ul class="tutorial-list">
        <li>What is a virtual environment?</li>
        <li>How to create and activate a virtual environment</li>
        <li>How to deactivate and remove a virtual environment</li>
      </ul>
      <p class="tutorial-description">In this tutorial, you'll learn how to use <code>venv</code> to manage project dependencies.</p>
    </div>

    <div class="tutorial-block">
      <h2 class="tutorial-block-title">What is a Virtual Environment?</h2>
      <p class="tutorial-block-desc">A virtual environment is a self-contained directory that contains a Python installation for a particular version of Python, plus a number of additional packages. It helps you avoid version conflicts between projects.</p>
      <div class="tutorial-block-content">
        <ul class="tutorial-block-list">
          <li>Isolates project dependencies</li>
          <li>Prevents conflicts between packages</li>
          <li>Makes it easy to reproduce environments</li>
        </ul>
      </div>
    </div>

    <div class="tutorial-block">
      <h2 class="tutorial-block-title">Create a Virtual Environment</h2>
      <p class="tutorial-block-desc">You can create a virtual environment using the built-in <code>venv</code> module. Open your terminal and run the following command:</p>
      <div class="tutorial-block-content">
        <div class="tutorial-block-code">python -m venv venv</div>
        <div class="tutorial-block-info">This will create a folder named <code>venv</code> in your current directory.</div>
      </div>
    </div>

    <div class="tutorial-block">
      <h2 class="tutorial-block-title">Activate the Virtual Environment</h2>
      <p class="tutorial-block-desc">To start using the virtual environment, you need to activate it. The command depends on your operating system:</p>
      <div class="tutorial-block-content">
        <ul class="tutorial-block-list">
          <li><b>Windows:</b> <div class="tutorial-block-code">venv\Scripts\activate</div></li>
          <li><b>macOS/Linux:</b> <div class="tutorial-block-code">source venv/bin/activate</div></li>
        </ul>
        <div class="tutorial-block-info">After activation, your terminal prompt will change to show the virtual environment name.</div>
      </div>
    </div>

    <div class="tutorial-block">
      <h2 class="tutorial-block-title">Deactivate and Remove the Virtual Environment</h2>
      <p class="tutorial-block-desc">When you're done working, you can deactivate the virtual environment by running:</p>
      <div class="tutorial-block-content">
        <div class="tutorial-block-code">deactivate</div>
        <div class="tutorial-block-info">To remove the virtual environment, simply delete the <code>venv</code> folder from your project directory.</div>
      </div>
    </div>
    <div style="text-align:center; margin: 2.5em 0 1.5em 0; display: flex; justify-content: center; gap: 1.5em;">
      <!-- Previous Button: Python Installation -->
      <form method="GET" action="/OnlineTech/pages/tutorials/python-installation/python-installation.php" style="display:inline;">
        <button type="submit" class="tutorial-nav-btn tutorial-nav-next" style="background: var(--color-warning); color: #fff; border: none; box-shadow: 0 2px 8px rgba(0,0,0,0.08); border-radius: 10px; padding: 1.2em 2.5em; font-size: 1.1em; font-family: 'Inter', sans-serif; transition: background 0.2s, opacity 0.2s, color 0.2s; cursor: pointer; opacity: 1;">
          <span>
            <span class="tutorial-nav-label">Previous</span>
            <span class="tutorial-nav-title">Python Installation</span>
          </span>
          <span class="tutorial-nav-arrow" style="transform: rotate(180deg);">&#8594;</span>
        </button>
      </form>
      <!-- Next Button: Hello World (save to DB) -->
      <form method="POST" action="/OnlineTech/php_logic/finish_tutorial.php" style="display:inline;">
        <input type="hidden" name="tutorial_id" value="2">
        <input type="hidden" name="redirect" value="/OnlineTech/pages/tutorials/hello-world/hello-world.php">
        <button type="submit" class="tutorial-nav-btn tutorial-nav-next" style="background: #1fd18b; color: #fff; border: none; box-shadow: 0 2px 8px rgba(0,0,0,0.08); border-radius: 10px; padding: 1.2em 2.5em; font-size: 1.1em; font-family: 'Inter', sans-serif; transition: background 0.2s, opacity 0.2s, color 0.2s; cursor: pointer; opacity: 1;">
          <span>
            <span class="tutorial-nav-label">Next</span>
            <span class="tutorial-nav-title">Hello World</span>
          </span>
          <span class="tutorial-nav-arrow">&#8594;</span>
        </button>
      </form>
    </div>
  </section>
  <?php include(__DIR__ . '/../../../includes/footer/footer.php'); ?>
</body>
</html>