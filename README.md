# Carr Tech Crunch

Carr Tech Crunch is an interactive web platform for learning programming concepts, practicing coding exercises, and tracking your progress. Users can register, log in, complete tutorials, comment on articles, and view their achievements on a personalized profile page.

## Features

- User registration, login, and profile management
- Step-by-step coding tutorials and interactive exercises
- Instant feedback on exercise answers
- Progress tracking for tutorials and exercises
- Comment system for articles
- Responsive, modern UI

## Tech Stack

- **Backend:** PHP, MySQL
- **Frontend:** HTML5, CSS3, JavaScript
- **Other:** Session management, secure password hashing, modular code structure

## Getting Started

1. **Clone the repository:**
   ```bash
   git clone https://github.com/SeanCarr1/Carr-Tech-Crunch.git
   cd Carr-Tech-Crunch
   ```

2. **Set up the database:**
   - Import the provided SQL schema (if available) into your MySQL server.
   - Update database credentials in `php_logic/db.php` if needed.

3. **Run locally:**
   - Use a local server (e.g., XAMPP, MAMP, WAMP) and point the document root to the project folder.

4. **Access the app:**
   - Open your browser and go to `http://localhost/OnlineTech/index.php`

## Folder Structure

- `pages/` — Main site pages (login, register, profile, tutorials, etc.)
- `php_logic/` — Backend logic (authentication, database, progress tracking)
- `assets/` — CSS, fonts, images, and JS libraries
- `includes/` — Reusable components (navbar, footer, feedback toasts)

## Contributing

Pull requests are welcome! For major changes, please open an issue first to discuss what you would like to change.

## License

[MIT](LICENSE) (or your preferred license)
