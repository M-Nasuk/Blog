<?php include "./repository/select-all.php"; ?>

<h2 style="padding-left: 1rem; font-weight: normal; margin-bottom: 1rem;">Categorie</h2>
<ul style="padding-left: 2rem; margin-bottom: 2rem;">
  <?php foreach ($cat_results as $cat_index): ?>
    <li style="margin-bottom: 0.5rem;"><h3 style="font-weight: normal;"><a href="result.php?id=<?= $cat_index['id_categorie']; ?>"><?= $cat_index['nom']; ?></a></h3></li>
  <?php endforeach; ?>
</ul>

<h2 style="padding-left: 1rem; font-weight: normal; margin-bottom: 1rem;">Game</h2>
<h3 style="padding-left: 2rem; font-weight: normal;"><a href="jump.php">Jump</a></h3>
