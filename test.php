<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou" rel="stylesheet">
    <link rel="stylesheet" href="../../css/normalize.css">
    <link type="text/css" rel="stylesheet" href="../../css/style.css">
    <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../js/utilities.js"></script>
    <script type="text/javascript" src="../../js/script.js"></script>
    <script type="text/javascript" src="../../js/main.js"></script>
    <title>Test</title>
  </head>
  <body>

    <main>
      <section style="display: inline-block; width: 70%;">

        <p>post</p>
        <!--<?php foreach ($_POST as $key => $val):?>
          <p><?= var_dump($key);  var_dump($val); ?></p>
        <?php endforeach; ?>-->
        <p>session</p>
        <?php foreach ($_SESSION as $key => $val):?>
          <p><?= var_dump($key);  var_dump($val); ?></p>
        <?php endforeach; ?>-->
      </section><!--
      --><aside>

      </aside>
    </main>
  </body>
</html>
