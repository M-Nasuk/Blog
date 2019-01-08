<?php include "./src/repository/select-all.php"; ?>

<p>Test</p>

<h3 style="padding-left: 1rem; font-weight: normal;">Categorie</h3>
<ul>
  <?php foreach ($cat_results as $cat_index): ?>
    <li><?= $cat_index['nom']; ?></li>
  <?php endforeach; ?>
</ul>
