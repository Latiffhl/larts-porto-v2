<?php
define('BASE_PATH', __DIR__);

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
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Open+Sans:wght@400;500;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  </head>

  <body id="top">
    <!-- ...existing code... -->
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
