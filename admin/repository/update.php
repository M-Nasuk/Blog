<?php

include '../../src/repository/db.php';
var_dump($_FILES);
var_dump($_POST);

if (isset($_POST)) {
  $titre = $_POST['billet_titre'];
  $corps_texte = $_POST['billet_cdt'];
  $categorie = $_POST['categorie'];
  $id = $_POST['id'];

  if (!empty($_FILES['billet_img']['name'])) {

    $img_blob = addslashes(file_get_contents($_FILES['billet_img']['tmp_name']));

    $update_post = $channel->prepare
    (
      'UPDATE billet
      SET titre = ?, corps_de_texte = ?, image = ?, categorie = ?
      WHERE id_billet = ?;
    ');

    $update_post->execute([$titre, $corps_texte, $img_blob, $categorie, $id]);


  } else {

    $update_post = $channel->prepare
    (
      'UPDATE billet
      SET titre = ?, corps_de_texte = ?, categorie = ?
      WHERE id_billet = ?;
    ');

    $update_post->execute([$titre, $corps_texte, $categorie, $id]);


  }


}









 ?>
