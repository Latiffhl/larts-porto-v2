<?php
require __DIR__ . "../public/index.php";
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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lartz</title>

    <link rel="shortcut icon" href="/favicon.svg" type="image/svg+xml" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <!-- ...existing code... -->
  </head>
  <body id="top">
    <!-- ...existing code... -->
    <main>
      <article>
        <section id="hero">
          <?php include __DIR__ . '/hero.php'; ?>
        </section>

        <section id="about">
          <?php include __DIR__ . '/about.php'; ?>
        </section>

        <section id="portfolio">
          <?php include __DIR__ . '/portfolio.php'; ?>
        </section>

        <section id="skills">
          <?php include __DIR__ . '/skills.php'; ?>
        </section>

        <section id="blog">
          <?php include __DIR__ . '/blog.php'; ?>
        </section>

        <section id="contact">
          <?php include __DIR__ . '/contact.php'; ?>
        </section>
      </article>
    </main>
    <!-- ...existing code... -->
  </body>
</html>
