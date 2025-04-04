<?php
header('Content-Type: text/html; charset=UTF-8');
define('BASE_PATH', __DIR__);

function safeRequire($file) {
    $path = BASE_PATH . '/pages/' . $file;
    if (file_exists($path)) {
        require $path;
    } else {
        echo "<!-- Could not load component: $file -->";
    }
}

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
  </head>
  <body id="top">
    <a href="https://api.whatsapp.com/send?phone=6281234567890" class="whatsapp-button" target="_blank">
      <img src="/assets/images/whatsapp-icon.png" alt="WhatsApp" />
    </a>

    <script src="/script.js"></script>
    <main>
      <article>
        <section id="hero">
          <?php safeRequire('hero/hero.php'); ?>
        </section>

        <section id="about">
          <?php safeRequire('about/about.php'); ?>
        </section>

        <section id="portfolio">
          <?php safeRequire('portofolio/portofolio.php'); ?>
        </section>

        <section id="skills">
          <?php safeRequire('skills/skills.php'); ?>
        </section>

        <section id="blog">
          <?php safeRequire('blogs/blogs.php'); ?>
        </section>

        <section id="contact">
          <?php safeRequire('contact/contact.php'); ?>
        </section>
      </article>
    </main>
  </body>
</html>
<?php
$output = ob_get_clean();
echo $output;
?>
