<?php

include 'db.php';

session_start();
if (isset($_SESSION['x'])) {

  $x = $_SESSION['x'];
  $limit = "LIMIT 5 OFFSET $x";

  $posts_view = $channel->prepare
  (
    "SELECT b.*, u.pseudo, c.nom
    FROM billet as b
    INNER JOIN utilisateur as u on u.id_utilisateur = b.author
    INNER JOIN categorie as c on c.id_categorie = b.categorie
    ORDER BY b.date_de_publication DESC
    $limit;
  ");
} else {
  $posts_view = $channel->prepare
  (
    "SELECT b.*, u.pseudo, c.nom
    FROM billet as b
    INNER JOIN utilisateur as u on u.id_utilisateur = b.author
    INNER JOIN categorie as c on c.id_categorie = b.categorie
    ORDER BY b.date_de_publication DESC
    LIMIT 5 OFFSET 0;
  ");
}

$posts_view->execute();
$posts_results = $posts_view->fetchAll(PDO::FETCH_ASSOC);

$posts_count = $channel->prepare
(
  "SELECT *
  FROM billet;
");

$posts_count->execute();
$posts_counts = $posts_count->fetchAll(PDO::FETCH_ASSOC);

$cat_view = $channel->prepare
(
  'SELECT *
  FROM categorie;
');

$cat_view->execute();
$cat_results = $cat_view->fetchAll(PDO::FETCH_ASSOC);

$users_view = $channel->prepare
(
  'SELECT *
  FROM utilisateur;
');

$users_view->execute();
$users_results = $users_view->fetchAll(PDO::FETCH_ASSOC);


?>
