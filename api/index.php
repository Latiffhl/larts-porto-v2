<?php
define('BASE_PATH', '/var/task/user');

function includeWithFallback($path) {
    if (file_exists($path)) {
        include $path;
    } else {
        echo "<!-- Component not found: $path -->";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- ...existing code... -->
  </head>
  <body>
    <main>
      <article>
        <section id="hero">
          <?php includeWithFallback(BASE_PATH . '/api/pages/hero/hero.php'); ?>
        </section>

        <section id="about">
          <?php includeWithFallback(BASE_PATH . '/api/pages/about/about.php'); ?>
        </section>

        <section id="portfolio">
          <?php includeWithFallback(BASE_PATH . '/api/pages/portofolio/portofolio.php'); ?>
        </section>

        <section id="skills">
          <?php includeWithFallback(BASE_PATH . '/api/pages/skills/skills.php'); ?>
        </section>

        <section id="blog">
          <?php includeWithFallback(BASE_PATH . '/api/pages/blogs/blogs.php'); ?>
        </section>

        <section id="contact">
          <?php includeWithFallback(BASE_PATH . '/api/pages/contact/contact.php'); ?>
        </section>
      </article>
    </main>
    <!-- ...existing code... -->
  </body>
</html>
