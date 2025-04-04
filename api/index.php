<?php
define('BASE_PATH', __DIR__);
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
          <?php include BASE_PATH . '/pages/hero/hero.php'; ?>
        </section>

        <section id="about">
          <?php include BASE_PATH . '/pages/about/about.php'; ?>
        </section>

        <section id="portfolio">
          <?php include BASE_PATH . '/pages/portofolio/portofolio.php'; ?>
        </section>

        <section id="skills">
          <?php include BASE_PATH . '/pages/skills/skills.php'; ?>
        </section>

        <section id="blog">
          <?php include BASE_PATH . '/pages/blogs/blogs.php'; ?>
        </section>

        <section id="contact">
          <?php include BASE_PATH . '/pages/contact/contact.php'; ?>
        </section>
      </article>
    </main>
    <!-- ...existing code... -->
  </body>
</html>
