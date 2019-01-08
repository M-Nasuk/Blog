<?php
include 'db.php';

$titre = $_POST['title'];
$corps_texte = $_POST['subject'];
$date_pub = $_POST['datetime'];
$img_blob = addslashes(file_get_contents($_FILES['img']['tmp_name']));
$video = null;
$categorie = $_POST['categorie'];
$author = $_POST['author'];



$insert_billet = $channel->prepare
(
  'INSERT INTO billet (titre, corps_de_texte, image, video, date_de_publication, categorie, author)
  VALUES (?, ?, ?, ?, ?, ?, ?);
');




$insert_billet->execute([$titre, $corps_texte, $img_blob, $video, $date_pub, $categorie, $author]);



header('Location: ../../index.php');
 ?>
