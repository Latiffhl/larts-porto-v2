<?php
header('Content-Type: text/html; charset=UTF-8');

define('BASE_PATH', __DIR__);

// Handle component includes
function includeComponent($path) {
    if (file_exists($path)) {
        include $path;
    } else {
        echo "<!-- Component not found: $path -->";
    }
}

// Start output buffering
ob_start();
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
    <a href="https://api.whatsapp.com/send?phone=6281234567890" class="whatsapp-button" target="_blank">
      <img src="/assets/images/whatsapp-icon.png" alt="WhatsApp" />
    </a>

    <script src="/script.js"></script>

    <header class="header" data-header>
      // ...existing code...
    </header>

    <main>
      <article>
        <section id="hero">
          <?php includeComponent(BASE_PATH . '/pages/hero.php'); ?>
        </section>

        <section id="about">
          <?php includeComponent(BASE_PATH . '/pages/about.php'); ?>
        </section>

        <section id="portfolio">
          <?php includeComponent(BASE_PATH . '/pages/portfolio.php'); ?>
        </section>

        <section id="skills">
          <?php includeComponent(BASE_PATH . '/pages/skills.php'); ?>
        </section>

        <section id="blog">
          <?php includeComponent(BASE_PATH . '/pages/blog.php'); ?>
        </section>

        <section id="contact">
          <?php includeComponent(BASE_PATH . '/pages/contact.php'); ?>
        </section>
      </article>
    </main>

    <footer class="footer">
      // ...existing code...
    </footer>

    <a href="#top" class="back-to-top" data-back-to-top>BACK TOP</a>

    <script src="/assets/js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>
<?php
// Output the buffered content
ob_end_flush();
?>
