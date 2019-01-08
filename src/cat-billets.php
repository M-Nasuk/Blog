<?php include "./src/repository/select-single.php"; ?>
<?php include "./src/utilities.php"; ?>


<?php foreach ($single_cat_billets_result as $billet_cat): ?>
  <?php $date = changeMonth($billet_cat['date_de_publication']); ?>
  <article class="art">
    <img src="<?= './public/images/'.$billet_cat['titre'].'.jpeg'; ?>" alt="img_post_forest">
    <h2><a href="single-post.php?id=<?= $billet_cat['id_billet']; ?>"><?= $billet_cat['titre']; ?></a></h2>
    <div>
      <h3><?= str_replace($date[0], $date[1], date('d F y \a H:i',strtotime($billet_cat['date_de_publication']))); ?> | </h3>
      <h3><a href="#"><?= $billet_cat['pseudo']; ?> | </a></h3>
      <h3><a href="#"><?= $billet_cat['nom']; ?></a></h3>
    </div>
    <p><?= substr($billet_cat['corps_de_texte'], 0, 50);?>...</p>
  </article>
<?php endforeach; ?>
