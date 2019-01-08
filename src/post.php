<?php include "./src/repository/select.php"; ?>
<?php include "./src/utilities.php"; ?>

<?php foreach ($posts_results as $result_id): ?>
  <?php $date = changeMonth($result_id['date_de_publication']); ?>
  <?php if ($result_id['id_billet'] == $_GET['id']): ;?>
    <article class="art">
      <img src="src/forest.jpg" alt="img_post_forest">
      <h2><?= $result_id['titre']; ?></h2>
      <div>
        <h3><?= str_replace($date[0], $date[1], date('d F y H:i',strtotime($result_id['date_de_publication']))); ?> | </h3>
        <h3><a href="#"><?= $result_id['pseudo']; ?> | </a></h3>
        <h3><a href="#"><?= $result_id['nom']; ?></a></h3>
      </div>
        <p><?= $result_id['corps_de_texte']; ?></p>
    </article>
  <?php endif; ?>
<?php endforeach; ?>
