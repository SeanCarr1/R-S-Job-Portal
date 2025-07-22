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
    <link rel="stylesheet" href="functions.css">
    <!-- Include exercise-utils.js -->
    <script src="../exercise-utils.js" defer></script>
    <script src="functions.js" defer></script>
</head>
<body>
<?php include(__DIR__ . '/../../../includes/feedback/feedback-toast.php'); ?>
<?php include(__DIR__ . '/../../../includes/navbar/navbar.php'); ?>
    <section class="exercises-section">
        <!-- Exercise 1: Write a sum function -->
        <div class="exercise-block">
            <div class="exercise-block-header">
                <h2 class="exercise-block-title">Sum Function</h2>
                <span class="exercise-block-badge exercise-badge-medium">Medium</span>
            </div>
            <div class="exercise-block-desc">
                <ol>
                    <li>Fill in the function name <strong><code>add</code></strong> to define a function that adds two numbers.</li>
                    <li>Fill in the correct Python keyword to return the sum.</li>
                    <li>Fill in the function name <strong><code>add</code></strong> to call your function with arguments 2 and 3.</li>
                </ol>
            </div>
            <form class="exercise-block-form" autocomplete="off">
                <div class="exercise-block-code">
                    <span>def <input type="text" data-answer="add" style="width:5ch;">(a, b):</span><br>
                    <span>    <input type="text" data-answer="return" style="width:7ch;"> a + b</span><br>
                    <span>print(<input type="text" data-answer="add" style="width:5ch;">(2, 3))</span>
                </div>
                <div class="exercise-block-info">Hint: Use <code>def</code> to define a function named <code>add</code> and <code>return</code> to return a value from a function.</div>
                <button type="submit" class="btn btn-primary">Check Answer</button>
                <div class="exercise-feedback" style="margin-top:0.5rem;"></div>
            </form>
        </div>
        <!-- Exercise 2: Greet function -->
        <div class="exercise-block">
            <div class="exercise-block-header">
                <h2 class="exercise-block-title">Greet Function</h2>
                <span class="exercise-block-badge exercise-badge-medium">Medium</span>
            </div>
            <div class="exercise-block-desc">
                <ol>
                    <li>Fill in the function name <strong><code>greet</code></strong> to define a function that greets a user by name.</li>
                    <li>Fill in the variable name <strong><code>name</code></strong> that should be used to concatenate with the greeting string.</li>
                    <li>Fill in the function name <strong><code>greet</code></strong> to call your greet function with the argument "Alice".</li>
                </ol>
            </div>
            <form class="exercise-block-form" autocomplete="off">
                <div class="exercise-block-code">
                    <span>def <input type="text" data-answer="greet" style="width:6ch;">(name):</span><br>
                    <span>    print("Hello, " + <input type="text" data-answer="name" style="width:6ch;"> + "!")</span><br>
                    <span><input type="text" data-answer="greet" style="width:6ch;">("Alice")</span>
                </div>
                <div class="exercise-block-info">Hint: Use the function name <code>greet</code> and the parameter name <code>name</code> exactly as shown.</div>
                <button type="submit" class="btn btn-primary">Check Answer</button>
                <div class="exercise-feedback" style="margin-top:0.5rem;"></div>
            </form>
        </div>
        <!-- Exercise 3: Function with return value -->
        <div class="exercise-block">
            <div class="exercise-block-header">
                <h2 class="exercise-block-title">Return Value</h2>
                <span class="exercise-block-badge exercise-badge-medium">Medium</span>
            </div>
            <div class="exercise-block-desc">
                <ol>
                    <li>Fill in the function name <strong><code>square</code></strong> to define a function that returns the square of a number.</li>
                    <li>Fill in the correct Python keyword to return the result.</li>
                    <li>Fill in the function name <strong><code>square</code></strong> to call your function with the argument 4.</li>
                </ol>
            </div>
            <form class="exercise-block-form" autocomplete="off">
                <div class="exercise-block-code">
                    <span>def <input type="text" data-answer="square" style="width:7ch;">(x):</span><br>
                    <span>    <input type="text" data-answer="return" style="width:7ch;"> x * x</span><br>
                    <span>print(<input type="text" data-answer="square" style="width:7ch;">(4))</span>
                </div>
                <div class="exercise-block-info">Hint: Use <code>return</code> to send a value back from a function named <code>square</code>.</div>
                <button type="submit" class="btn btn-primary">Check Answer</button>
                <div class="exercise-feedback" style="margin-top:0.5rem;"></div>
            </form>
        </div>
        <form id="finish-exercise-form" method="POST" action="/OnlineTech/php_logic/finish_exercise.php" style="margin-top:2rem;text-align:center;">
            <input type="hidden" name="exercise_id" value="2">
            <input type="hidden" name="redirect" value="/OnlineTech/pages/exercises/exercises.php?feedback=exercise_finished">
            <!-- tasks[] hidden inputs will be added by JS -->
            <button type="submit" class="tutorial-nav-btn tutorial-nav-next" disabled>
                <span>
                    <span class="tutorial-nav-label">Next</span>
                    <span class="tutorial-nav-title">Functions Exercise Complete</span>
                </span>
                <span class="tutorial-nav-arrow">&#8594;</span>
            </button>
            <div id="finish-exercise-feedback" style="margin-top:0.5rem;"></div>
        </form>
    </section>

    <script src="functions.js" defer></script>
    <?php include(__DIR__ . '/../../../includes/footer/footer.php'); ?>
</body>
</html>
