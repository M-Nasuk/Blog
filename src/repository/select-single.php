<?php
include 'db.php';

$single_post_view = $channel->prepare
(
  'SELECT b.*, u.pseudo, c.nom
  FROM billet as b
  INNER join utilisateur as u on u.id_utilisateur = b.author
  INNER join categorie as c on c.id_categorie = b.categorie
  WHERE id_billet = ?;
');

$single_post_view->execute([$_GET['id']]);
$single_post_result = $single_post_view->fetch(PDO::FETCH_ASSOC);


$single_cat_billets = $channel->prepare
(
  'SELECT b.*, u.pseudo, c.nom
  FROM billet as b
  INNER join utilisateur as u on u.id_utilisateur = b.author
  INNER join categorie as c on c.id_categorie = b.categorie
  WHERE id_categorie = ?
  ORDER BY b.date_de_publication DESC;
;');

$single_cat_billets->execute([$_GET['id']]);
$single_cat_billets_result = $single_cat_billets->fetchAll(PDO::FETCH_ASSOC);


 ?>
