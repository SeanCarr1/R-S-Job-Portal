<?php
session_start();
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
  <link rel="stylesheet" href="hello-world.css">
</head>
<body>
  <?php include(__DIR__ . '/../../../includes/feedback/feedback-toast.php'); ?>
  <?php include(__DIR__ . '/../../../includes/navbar/navbar.php'); ?>
  <section class="tutorial-section">
    <div class="tutorial-header">
      <h1 class="tutorial-title">Your First Python Program: Hello World</h1>
      <p class="tutorial-description">Let's write and run your very first Python program. This is a classic tradition for learning any new programming language!</p>
      <ul class="tutorial-list">
        <li>How to write a Python script</li>
        <li>How to run your script from the terminal</li>
        <li>Understanding the output</li>
      </ul>
      <p class="tutorial-description">In this tutorial, you'll create a simple program that prints <code>Hello, World!</code> to the screen.</p>
    </div>

    <div class="tutorial-block">
      <h2 class="tutorial-block-title">Write Your First Python Script</h2>
      <p class="tutorial-block-desc">Open your code editor (such as VS Code) and create a new file named <code>hello.py</code>. Type the following code:</p>
      <div class="tutorial-block-content">
        <div class="tutorial-block-code">print("Hello, World!")</div>
      </div>
    </div>

    <div class="tutorial-block">
      <h2 class="tutorial-block-title">Run Your Script</h2>
      <p class="tutorial-block-desc">Open your terminal, navigate to the folder where you saved <code>hello.py</code>, and run:</p>
      <div class="tutorial-block-content">
        <div class="tutorial-block-code">python hello.py</div>
        <div class="tutorial-block-info">If you see <code>Hello, World!</code> printed in your terminal, congratulations! You've just run your first Python program.</div>
      </div>
    </div>

    <div class="tutorial-block">
      <h2 class="tutorial-block-title">What Just Happened?</h2>
      <p class="tutorial-block-desc">The <code>print()</code> function outputs whatever is inside the parentheses to the screen. In this case, it prints the text <code>Hello, World!</code>.</p>
      <div class="tutorial-block-content">
        <ul class="tutorial-block-list">
          <li><code>print()</code> is a built-in Python function for displaying output.</li>
          <li>Text inside quotes (<code>"Hello, World!"</code>) is called a string.</li>
        </ul>
      </div>
    </div>

    <div style="text-align:center; margin: 2.5em 0 1.5em 0;">
      <form method="POST" action="/OnlineTech/php_logic/finish_tutorial.php" style="display:inline;">
        <input type="hidden" name="tutorial_id" value="3">
        <input type="hidden" name="redirect" value="/OnlineTech/pages/tutorials/tutorials.php">
        <button type="submit" class="tutorial-nav-btn tutorial-nav-next" style="background: #1fd18b; color: #fff; border: none; box-shadow: 0 2px 8px rgba(0,0,0,0.08); border-radius: 10px; padding: 1.2em 2.5em; font-size: 1.1em; font-family: 'Inter', sans-serif; transition: background 0.2s, opacity 0.2s, color 0.2s; cursor: pointer; opacity: 1;">
          <span>
            <span class="tutorial-nav-label">Next</span>
            <span class="tutorial-nav-title">Back to Tutorials</span>
          </span>
          <span class="tutorial-nav-arrow">&#8594;</span>
        </button>
      </form>
    </div>
  </section>
  <?php include(__DIR__ . '/../../../includes/footer/footer.php'); ?>
</body>
</html>