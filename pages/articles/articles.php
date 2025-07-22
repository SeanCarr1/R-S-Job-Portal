<?php include(__DIR__ . '/../../php_logic/check_if_logged_in.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carr Tech Crunch</title>
  <link rel="icon" type="image/png" href="/OnlineTech/assets/images/logo.png">
  <link rel="stylesheet" href="articles.css">
</head>
<body>
  <?php include(__DIR__ . '/../../includes/navbar/navbar.php'); ?>

  <section class="main-content articles-section col-span-12">
    <div class="articles-header">
      <h1 class="articles-title">Articles</h1>
      <p class="articles-description">Explore in-depth articles and expert analysis on technology trends, startups, and innovations from Carr Tech Crunch.</p>
    </div>
    <div class="articles-list">
      <article class="article-card grid grid-cols-12">
        <div class="article-card-image col-span-4">
          <img src="/OnlineTech/assets/images/article1.png" alt="Framework Comparison" />
        </div>
        <div class="article-card-content col-span-8">
          <div class="article-card-meta">
            <span class="article-card-category">Web Development</span>
            <span class="article-card-category">Backend</span>
          </div>
          <h2 class="article-card-title">Modern Backend Frameworks: Laravel, Django, and Node.js Compared</h2>
          <p class="article-card-summary">Explore the strengths, weaknesses, and best use cases for three of the most popular backend frameworks: Laravel (PHP), Django (Python), and Node.js (JavaScript). Learn which one fits your next project.</p>
          <div class="article-card-footer">
            <span class="article-card-author">Alex Morgan</span>
            <span class="article-card-date">30 May 2025</span>
          </div>
          <a class="article-card-link" href="detail/modern-backend-frameworks.php">Read more <span>&rarr;</span></a>
        </div>
      </article>
      <article class="article-card grid grid-cols-12">
        <div class="article-card-image col-span-4">
          <img src="/OnlineTech/assets/images/article2.jpg" alt="Accessibility" />
        </div>
        <div class="article-card-content col-span-8">
          <div class="article-card-meta">
            <span class="article-card-category">Web Development</span>
            <span class="article-card-category">Accessibility</span>
          </div>
          <h2 class="article-card-title">Building Accessible Web Applications: Best Practices</h2>
          <p class="article-card-summary">Discover essential tips and tools for making your web applications accessible to everyone, including users with disabilities. Improve usability, reach, and compliance with modern accessibility standards.</p>
          <div class="article-card-footer">
            <span class="article-card-author">Jamie Lee</span>
            <span class="article-card-date">30 May 2025</span>
          </div>
          <a class="article-card-link" href="detail/accessible-web-apps.php">Read more <span>&rarr;</span></a>
        </div>
      </article>
    </div>
  </section>
  
  <?php
  include(__DIR__ . '/../../includes/footer/footer.php');
  ?>
</body>
</html>



