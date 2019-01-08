<?php
include 'db.php';

$data_billet = [
  'title' => $titre,
  'corps' => $corps_texte,
  'date' => $date_pub,
  'cat' => $categorie,
  'author' => $author
];

$insert_billet = $channel->prepare
(
  'INSERT INTO billet (titre, corps_de_texte, date_de_publication, categorie, author)
  VALUES (:titre, :corps_texte, :date_pub, ,:categorie, :author);
');

if (isset ($_POST)) {

}



$insert_billet->execute($data_billet);




header('Location: ../billet.php');
 ?>
