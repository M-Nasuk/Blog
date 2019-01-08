<?php include "./repository/select-all.php"; ?>
<?php include "./utilities.php"; ?>


<?php foreach ($posts_results as $result_id): ?>
  <?php $date = changeMonth($result_id['date_de_publication']); ?>
  <article class="art">
    <img src="<?php $image = $result_id['titre'].'.jpeg'; file_put_contents('../public/images/'.$image, stripslashes($result_id['image'])); echo './public/images/'.$result_id['titre'].'.jpeg'; ?>" alt="img_post_forest">
    <h2><a href="single-post.php?id=<?= $result_id['id_billet']; ?>"><?= $result_id['titre']; ?></a></h2>
    <div>
      <h3><?= str_replace($date[0], $date[1], date('d F y \a H:i',strtotime($result_id['date_de_publication']))); ?> | </h3>
      <h3><a href="#"><?= $result_id['pseudo']; ?> | </a></h3>
      <h3><a href="#"><?= $result_id['nom']; ?></a></h3>
    </div>
    <p><?= substr($result_id['corps_de_texte'], 0, 50);?>...</p>
  </article>
<?php endforeach; ?>
