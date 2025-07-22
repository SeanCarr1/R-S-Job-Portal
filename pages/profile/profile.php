<?php

include_once(__DIR__ . '/../../php_logic/check_if_logged_in.php');
include_once(__DIR__ . '/../../php_logic/db.php');

$data = include(__DIR__ . '/../../php_logic/get_profile.php');
$user = $data['user'];
$completed_tutorials = $data['completed_tutorials'];
$completed_exercises = $data['completed_exercises'];

$update_status = isset($_GET['update']) ? $_GET['update'] : '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carr Tech Crunch</title>
    <link rel="stylesheet" href="../tutorial-template.css">
    <link rel="stylesheet" href="profile.css">
</head>
<body>
<?php include(__DIR__ . '/../../includes/navbar/navbar.php'); ?>
<section class="profile-section">
    <h1 class="profile-title">Your Profile</h1>
    <?php if ($update_status === 'success'): ?>
        <div class="profile-success">Profile updated successfully.</div>
    <?php elseif ($update_status === 'error'): ?>
        <div class="profile-error">There was an error updating your profile. Please try again.</div>
    <?php endif; ?>

    <div class="profile-info">
        <div><span class="profile-label">Username:</span> <?= htmlspecialchars($user['username']) ?></div>
    </div>

    <div class="profile-info" style="text-align:center; color:#bbb; font-size:1.1em;" >
        <h2>Completed Tutorials</h2>
        <?php if (count($completed_tutorials) > 0): ?>
            <ul class="profile-list">
                <?php foreach ($completed_tutorials as $tut): ?>
                    <li><a href="<?= htmlspecialchars($tut['link']) ?>"><?= htmlspecialchars($tut['title']) ?></a> <span style="color:#888; font-size:0.9em;">(<?= htmlspecialchars($tut['completed_at']) ?>)</span></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <div><span style="font-size:2em;">&#128712;</span><br>No tutorials completed yet.</div>
        <?php endif; ?>
    </div>
    <div class="profile-info" style="text-align:center; color:#bbb; font-size:1.1em;">
        <h2>Completed Exercises</h2>
        <?php if (count($completed_exercises) > 0): ?>
            <ul class="profile-list">
                <?php foreach ($completed_exercises as $ex): ?>
                    <li><a href="<?= htmlspecialchars($ex['link']) ?>"><?= htmlspecialchars($ex['title']) ?></a> <span style="color:#888; font-size:0.9em;">(<?= htmlspecialchars($ex['completed_at']) ?>)</span></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <div><span style="font-size:2em;">&#128221;</span><br>No exercises completed yet.</div>
        <?php endif; ?>
    </div>
</section>
<?php include(__DIR__ . '/../../includes/footer/footer.php'); ?>
</body>
</html>
