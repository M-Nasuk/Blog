<?php include "./repository/select.php"; $date = changeMonth($posts_results[0]['date_de_publication']);?>

<article class="art">
  <img src="src/forest.jpg" alt="img_post_forest">
  <h2><a href="single-post.php"><?= $posts_results[0]['titre']; ?></a></h2>
  <div>
    <h3><?= str_replace($date[0], $date[1], date('d F y H:i',strtotime($posts_results[0]['date_de_publication']))); ?> | </h3>
    <h3><a href="#"><?= $posts_results[0]['pseudo']; ?> | </a></h3>
    <h3><a href="#"><?= $posts_results[0]['nom']; ?></a></h3>
  </div>
  <p>
    <?= $posts_results[0]['corps_de_texte']; ?>
  </p>
</article>
