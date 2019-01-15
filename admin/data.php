<?php

//include 'tests/test.php';
include '../src/repository/db.php';

$posts_view = $channel->prepare
(
  'SELECT id_billet, titre, corps_de_texte, categorie, author
  FROM billet;
');

$posts_view->execute();
$posts_results = $posts_view->fetchAll(PDO::FETCH_ASSOC);


$cat_view = $channel->prepare
(
  'SELECT *
  FROM categorie;
');

$cat_view->execute();
$cat_results = $cat_view->fetchAll(PDO::FETCH_ASSOC);

$users_view = $channel->prepare
(
  'SELECT id_utilisateur, nom, prenom, pseudo, e_mail, telephone, role
  FROM utilisateur;
');

$users_view->execute();
$users_results = $users_view->fetchAll(PDO::FETCH_ASSOC);

$data = [];

foreach ($posts_results as $key) {
  $data['posts'][] = json_encode($key);
}
foreach ($cat_results as $key) {
  $data['cat'][] = json_encode($key);
}
foreach ($users_results as $key) {
  $data['users'][] = json_encode($key);
}

echo json_encode($data);


?>
