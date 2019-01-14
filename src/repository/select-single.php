<?php
session_start();
include 'db.php';

if (isset($_SESSION['billet_id'])) {
  $billet_id = $_SESSION['billet_id'];
} else {
  $billet_id = null;
}

$single_post_view = $channel->prepare
(
  'SELECT b.*, u.pseudo, c.nom
  FROM billet as b
  INNER join utilisateur as u on u.id_utilisateur = b.author
  INNER join categorie as c on c.id_categorie = b.categorie
  WHERE id_billet = ?;
');

$single_post_view->execute([$billet_id]);
$single_post_result = $single_post_view->fetch(PDO::FETCH_ASSOC);


if (isset($_SESSION['cat_id'])) {
  $cat_id = $_SESSION['cat_id'];
} else {
  $cat_id = null;
}


$single_cat_billets = $channel->prepare
(
  'SELECT b.*, u.pseudo, c.nom
  FROM billet as b
  INNER join utilisateur as u on u.id_utilisateur = b.author
  INNER join categorie as c on c.id_categorie = b.categorie
  WHERE id_categorie = ?
  ORDER BY b.date_de_publication DESC;
;');

$single_cat_billets->execute([$cat_id]);
$single_cat_billets_result = $single_cat_billets->fetchAll(PDO::FETCH_ASSOC);


 ?>
