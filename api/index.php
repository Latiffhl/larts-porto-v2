<?php
header('Content-Type: text/html; charset=UTF-8');
define('BASE_PATH', __DIR__);
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
    <main>
      <article>
        <section id="hero">
          <?php include BASE_PATH . '/pages/hero.php'; ?>
        </section>
      </article>
    </main>
  </body>
</html>
