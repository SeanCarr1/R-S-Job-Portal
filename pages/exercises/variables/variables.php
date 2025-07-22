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
    <link rel="stylesheet" href="../exercises-blocks.css">
    <!-- Include exercise-utils.js before variables-exercises.js -->
    <script src="../exercise-utils.js" defer></script>
    <script src="./variables-exercises.js" defer></script>
    <style>
        /* Add custom styles for this exercise here if needed */
    </style>
</head>
<body>
<?php include(__DIR__ . '/../../../includes/feedback/feedback-toast.php'); ?>
<?php include(__DIR__ . '/../../../includes/navbar/navbar.php'); ?>
    <section class="exercises-section">
        <!-- Exercise 2: Assign a string and print its type -->
        <div class="exercise-block">
            <div class="exercise-block-header">
                <h2 class="exercise-block-title">String Variable</h2>
                <span class="exercise-block-badge exercise-badge-easy">Easy</span>
            </div>
            <div class="exercise-block-desc">Declare a variable with a string value and print whether it is a string using a built-in function.</div>
            <form class="exercise-block-form" autocomplete="off">
                <div class="exercise-block-code">
                    <span># Assign a string to a variable and check if it is a string</span><br>
                    <span><span style="color:#7ec699">name</span> = <input type="text" size="7" style="width:6em;">  <span style="color:#b294bb"># assign a string</span></span><br>
                    <span>print(<input type="text" size="18" style="width:12em;">)</span>
                </div>
                <div class="exercise-block-info">Hint: Use <code>isinstance()</code> to check if a variable is a string.</div>
                <button type="submit" class="btn btn-primary">Check Answer</button>
                <div class="exercise-feedback" style="margin-top:0.5rem;"></div>
            </form>
        </div>
        <!-- Exercise 3: Assign a float and print its type -->
        <div class="exercise-block">
            <div class="exercise-block-header">
                <h2 class="exercise-block-title">Float Variable</h2>
                <span class="exercise-block-badge exercise-badge-easy">Easy</span>
            </div>
            <div class="exercise-block-desc">Declare a variable with a float value and check if it is a float using a built-in function.</div>
            <form class="exercise-block-form" autocomplete="off">
                <div class="exercise-block-code">
                    <span># Assign a float to a variable and check if it is a float</span><br>
                    <span><span style="color:#7ec699">price</span> = <input type="text" data-answer="3.14" size="4" style="width:3em;">  <span style="color:#b294bb"># assign a float</span></span><br>
                    <span>print(<input type="text" data-answer="isinstance(price, float)" size="20" style="width:13em;">)</span>
                </div>
                <div class="exercise-block-info">Hint: Use <code>isinstance()</code> to check if a variable is a float.</div>
                <button type="submit" class="btn btn-primary">Check Answer</button>
                <div class="exercise-feedback" style="margin-top:0.5rem;"></div>
            </form>
        </div>
        <!-- Exercise 4: Assign a boolean and print its type -->
        <div class="exercise-block">
            <div class="exercise-block-header">
                <h2 class="exercise-block-title">Boolean Variable</h2>
                <span class="exercise-block-badge exercise-badge-easy">Easy</span>
            </div>
            <div class="exercise-block-desc">Declare a variable with a boolean value and check if it is a boolean using a built-in function.</div>
            <form class="exercise-block-form" autocomplete="off">
                <div class="exercise-block-code">
                    <span># Assign a boolean to a variable and check if it is a boolean</span><br>
                    <span><span style="color:#7ec699">is_valid</span> = <input type="text" data-answer="True" size="4" style="width:3em;">  <span style="color:#b294bb"># assign a boolean</span></span><br>
                    <span>print(<input type="text" data-answer="isinstance(is_valid, bool)" size="22" style="width:14em;">)</span>
                </div>
                <div class="exercise-block-info">Hint: Use <code>isinstance()</code> to check if a variable is a boolean.</div>
                <button type="submit" class="btn btn-primary">Check Answer</button>
                <div class="exercise-feedback" style="margin-top:0.5rem;"></div>
            </form>
        </div>
        <form id="finish-exercise-form" method="POST" action="/OnlineTech/php_logic/finish_exercise.php" style="margin-top:2rem;text-align:center;">
            <input type="hidden" name="exercise_id" value="1">
            <input type="hidden" name="redirect" value="/OnlineTech/pages/exercises/functions/functions.php">
            <!-- tasks[] hidden inputs will be added by JS -->
            <button type="submit" class="tutorial-nav-btn tutorial-nav-next" disabled>
                <span>
                    <span class="tutorial-nav-label">Next</span>
                    <span class="tutorial-nav-title">Variables Exercise Complete</span>
                </span>
                <span class="tutorial-nav-arrow">&#8594;</span>
            </button>
            <div id="finish-exercise-feedback" style="margin-top:0.5rem;"></div>
        </form>
    </section>
    
    <script src="variables.js" defer></script>
    <?php include(__DIR__ . '/../../../includes/footer/footer.php'); ?>
</body>
</html>
