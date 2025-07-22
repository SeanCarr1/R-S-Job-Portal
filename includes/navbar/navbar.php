<link rel="stylesheet" href="/OnlineTech/includes/navbar/menu.css">
<nav class="navbar col-span-12">
  <div class="flex items-center justify-between p-4">
    <div class="navbar-item">
        <a href="index.php?page=home">
          <img src="/OnlineTech/assets/images/carr-tech-crunch-high-resolution-logo-transparent.png" width="200rem" height="auto" alt="Carr Tech Crunch Logo">
        </a>
    </div>
    <div class="navbar-item">
        <ul class="menu">
          <li><a href="/OnlineTech/index.php?page=home">Home</a></li>
          <li><a href="/OnlineTech/index.php?page=tutorials">Tutorials</a></li>
          <li><a href="/OnlineTech/index.php?page=exercises">Exercises</a></li>
          <li><a href="/OnlineTech/index.php?page=articles">Articles</a></li>
          <li><a href="/OnlineTech/index.php?page=profile">Profile</a></li>
          <!-- <li><a href="index.php?page=about">Contact Info</a></li> -->
        </ul>
    </div>
    <div class="navbar-item flex flex-row-reverse navbar-end">
        <?php if (isset($_SESSION['username'])): ?>
            <form action="/OnlineTech/php_logic/logout.php" method="POST" style="display:inline;">
                <button type="submit" class="btn btn-primary">Logout</button>
            </form>
        <?php else: ?>
            <a href="/OnlineTech/pages/register/register.php" class="btn btn-primary">Get Started</a>
            <a href="/OnlineTech/pages/login/login.php" class="btn btn-secondary">Login</a>
        <?php endif; ?>
    </div>
  </div>
</nav>

