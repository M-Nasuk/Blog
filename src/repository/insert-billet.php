<?php
include 'db.php';

$titre = $_POST['title'];
$corps_texte = $_POST['subject'];
$img_blob = addslashes(file_get_contents($_FILES['img']['tmp_name']));
$video = null;
$date_pub = $_POST['datetime'];
$categorie = $_POST['categorie'];
$author = $_POST['author'];

$data_billet = [
  'title' => $titre,
  'subject' => $corps_texte,
  'img' => $img_blob,
  'video' => $video,
  'datepost' => $date_pub,
  'cat' => $categorie,
  'auteur' => $author
];

$insert_billet = $channel->prepare
(
  'INSERT INTO billet (titre, corps_de_texte, image, video, date_de_publication, categorie, author)
  VALUES (:title, :subject, :img, :video, :datepost, :cat, :auteur);
');




$insert_billet->execute($data_billet);



header('Location: ../../index.php');
 ?>
