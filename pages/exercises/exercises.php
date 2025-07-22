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
    <link rel="stylesheet" href="/OnlineTech/assets/css/libraries/index.css">
    <style>
        section {
            grid-column: span 12;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2.5rem;
            padding: 2rem 0 3rem 0;
        }

        .exercises-title-wrapper {
            text-align: center;
        }

        .exercises-cards-wrapper {
            display: flex;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
            width: 100%;
        }

        .exercises-card {
            display: flex;
            flex-direction: column;
            border-radius: 12px;
            gap: 1rem;
            max-width: 400px;
            width: 100%;
            padding: 2rem 1.5rem;
            background-color: var(--color-base-200);
            box-shadow: 0 2px 12px 0 rgb(0 0 0 / 7%);
            transition: box-shadow 0.2s;
        }

        .exercises-card:hover {
            box-shadow: 0 4px 24px 0 rgb(0 0 0 / 12%);
        }

        .exercises-card-content {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .exercises-card-label {
            font-size: 1.25rem;
            font-weight: 600;
        }

        .exercises-card-desc {
            color: var(--color-text);
            opacity: 0.85;
            font-size: 1rem;
        }

        .exercises-card-badge {
            display: flex;
            justify-content: center;
            padding: 0.25em 0.75em;
            border-radius: 999px;
            font-size: 0.95rem;
            font-weight: 500;
            width: 6rem;
            background: var(--color-base-100);
            color: var(--color-primary);
        }

        .exercises-badge-easy {
            background: var(--color-success);
            color: var(--color-text);
        }

        .exercises-badge-medium {
            background: var(--color-warning);
            color: var(--color-text);
        }

        .exercises-badge-hard {
            background: var(--color-error);
            color: var(--color-text);
        }

        .exercises-card-btn, .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            border-radius: 6px;
            background: var(--color-primary);
            color: var(--color-text);
            font-weight: 500;
            text-decoration: none;
            border: none;
            cursor: pointer;
            transition: background 0.2s;
        }

        .exercises-card-btn:hover, .btn:hover {
            background: var(--color-secondary);
        }

        .exercises-divider {
            width: 100%;
            max-width: 700px;
            height: 2px;
            background: var(--color-base-300);
            border-radius: 1px;
        }
        .exercises-extra {
            max-width: 700px;
            width: 100%;
            margin: 0 auto;
            text-align: center;
        }
            .exercises-extra ul {
                margin: 0;
                padding: 0;
                list-style: none;
            }

        .exercises-extra li {
            font-size: 1.05rem;
        }

        @media (max-width: 600px) {
            .exercises-card {
                padding: 1.25rem 0.75rem;
            }

            .exercises-cards-wrapper {
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
<?php include(__DIR__ . '/../../includes/feedback/feedback-toast.php'); ?>
<?php include(__DIR__ . '/../../includes/navbar/navbar.php'); ?>
    <section>
        <div class="exercises-title-wrapper">
            <h1 class="exercises-title">Python Exercises</h1>
            <p>Practice your Python skills! Choose an exercise below to solve coding challenges and get instant feedback.</p>
        </div>
        <div class="exercises-cards-wrapper">
            <article class="exercises-card">
                <div class="exercises-card-content">
                    <div class="exercises-card-label">Variables & Data Types</div>
                    <div class="exercises-card-desc">Test your understanding of Python variables and data types.</div>
                    <div class="exercises-card-badge exercises-badge-easy">Easy</div>
                </div>
                <div class="exercises-card-action">
                    <a class="exercises-card-btn btn" href="/OnlineTech/index.php?page=exercises/variables">Start Exercise</a>
                </div>
            </article>
            <article class="exercises-card">
                <div class="exercises-card-content">
                    <div class="exercises-card-label">Functions</div>
                    <div class="exercises-card-desc">Write and use functions to solve problems.</div>
                    <div class="exercises-card-badge exercises-badge-medium">Medium</div>
                </div>
                <div class="exercises-card-action">
                    <a class="exercises-card-btn btn" href="/OnlineTech/index.php?page=exercises/functions">Start Exercise</a>
                </div>
            </article>
        </div>
        <div class="exercises-divider"></div>
        <div class="exercises-extra">
            <h2>Why Practice Python?</h2>
            <ul>
                <li>Reinforce your learning with hands-on coding</li>
                <li>Prepare for interviews and real-world projects</li>
                <li>Track your progress and improve problem-solving skills</li>
            </ul>
        </div>
    </section>
    <?php include(__DIR__ . '/../../includes/footer/footer.php'); ?>
</body>
</html>
