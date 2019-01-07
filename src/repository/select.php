<?php

include 'utilities.php';

$posts_view = $channel->prepare
(
  'SELECT b.*, u.pseudo, c.nom
  FROM billet as b
  INNER join utilisateur as u on u.id_utilisateur = b.author
  INNER join categorie as c on c.id_categorie = b.categorie;
');

$posts_view->execute();
$posts_results = $posts_view->fetchAll(PDO::FETCH_ASSOC);







 ?>
