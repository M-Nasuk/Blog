<?php include "./src/repository/select-all.php"; ?>

<h2 style="padding-left: 1rem; font-weight: normal; margin-bottom: 1rem;">Categorie</h3>
<ul style="padding-left: 2rem;">
  <?php foreach ($cat_results as $cat_index): ?>
    <li style="margin-bottom: 0.5rem;"><h3 style="font-weight: normal;"><a href="result.php?id=<?= $cat_index['id_categorie']; ?>"><?= $cat_index['nom']; ?></a></h3></li>
  <?php endforeach; ?>
</ul>
