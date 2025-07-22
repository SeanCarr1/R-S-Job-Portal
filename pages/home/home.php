<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carr Tech Crunch</title>
  <link rel="icon" type="image/png" href="/OnlineTech/assets/images/logo.png">
  <link rel="stylesheet" href="homepage.css">
</head>
<body>
  <?php include(__DIR__ . '/../../includes/navbar/navbar.php'); ?>
  <section class="homepage-hero">
    <h1 class="homepage-headline">
      Welcome to Carr Tech Crunch
    </h1>
    <p class="homepage-subheadline">
      Explore the world of code, creativity, and connection. Tutorials, reviews, and tech stories to help developers learn, build, and grow.
    </p>
    <div class="homepage-cta">
      <?php if (!isset($_SESSION['username'])): ?>
        <form action="/OnlineTech/php_logic/logout.php" method="POST" style="display:inline;">
            <a href="/OnlineTech/index.php?page=register" class="btn btn-primary">Get Started</a>
        </form>
      <?php endif; ?>
      <a href="/OnlineTech/index.php?page=tutorials" class="btn btn-outline">Tutorials</a>
      <a href="/OnlineTech/index.php?page=exercises" class="btn btn-outline">Coding Exercises</a>
      <a href="/OnlineTech/index.php?page=articles" class="btn btn-outline">Articles</a>
    </div>
  </section>
  <hr class="divider" />
  <section class="features-section">
    <h2 class="features-title">Designed for developers like you</h2>
    <p class="features-desc">
      Practice your skills with interactive coding exercises and challenges. Test your knowledge and track your progress as you learn.
    </p>
    <div class="features-grid">
      <div class="feature-card">
        <div class="feature-icon">📚</div>
        <div class="feature-title">
          <a href="/OnlineTech/index.php?page=tutorials" class="feature-link">Tutorials</a>
        </div>
        <div class="feature-desc">
          Step-by-step guides and walkthroughs for all skill levels. Learn new frameworks, languages, and best practices with hands-on examples.
        </div>
      </div>
      <div class="feature-card">
        <div class="feature-icon">📰</div>
        <div class="feature-title">
          <a href="/OnlineTech/index.php?page=articles" class="feature-link">Articles</a>
        </div>
        <div class="feature-desc">
          In-depth articles on the latest tech trends, product reviews, and developer stories. Stay updated and inspired with fresh content.
        </div>
      </div>
      <div class="feature-card">
        <div class="feature-icon">💻</div>
        <div class="feature-title">
          <a href="/OnlineTech/index.php?page=exercises" class="feature-link">Coding Exercises</a>
        </div>
        <div class="feature-desc">
          Practice your skills with interactive coding exercises and challenges. Test your knowledge and track your progress as you learn.
        </div>
      </div>
    </div>
  </section>
  <section class="related-section">
    <h2 class="related-title">Latest Articles</h2>
    <div class="related-articles">
      <div class="related-card">
      <img src="/OnlineTech/pages/home/images/article1.png" alt="Accessibility in Web Apps" class="related-img">
      <div class="related-content">
        <div class="related-article-title">Accessibility in Web Apps</div>
        <div class="related-article-desc">Discover essential tips and tools for making your web applications accessible to everyone, including users with disabilities. Improve usability, reach, and compliance with modern accessibility standards.</div>
        <a href="/OnlineTech/pages/articles/detail/accessible-web-apps.php" class="related-link">Read in 2 minutes</a>
      </div>
      </div>
      <div class="related-card">
      <img src="/OnlineTech/pages/home/images/article2.jpg" alt="Enterprise design tips" class="related-img">
      <div class="related-content">
        <div class="related-article-title">Enterprise Design Tips</div>
        <div class="related-article-desc">Explore best practices for designing scalable and maintainable enterprise applications. Learn about design systems, modular architecture, and collaboration strategies for large teams.</div>
        <a href="/OnlineTech/pages/articles/detail/modern-backend-frameworks.php" class="related-link">Read in 3 minutes</a>
      </div>
      </div>
    </div>
  </section>
  <?php include(__DIR__ . '/../../includes/footer/footer.php'); ?>
</body>
</html>
