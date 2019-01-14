<?php include "./repository/select-single.php"; ?>
<?php include "./utilities.php"; ?>


<?php $date = changeMonth($single_post_result['date_de_publication']); ?>

<article class="art">
  <img src="public/images/<?= $single_post_result['titre'].'.jpeg'; ?>" alt="img_post_forest">
  <h2><?= $single_post_result['titre']; ?></h2>
  <div>
    <h3><?= str_replace($date[0], $date[1], date('d F y H:i',strtotime($single_post_result['date_de_publication']))); ?> | </h3>
    <h3><a href="#"><?= $single_post_result['pseudo']; ?> | </a></h3>
    <h3><a href="#"><?= $single_post_result['nom']; ?></a></h3>
  </div>
    <p><?= $single_post_result['corps_de_texte']; ?></p>
</article>
