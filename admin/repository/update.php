<?php

include '../../src/repository/db.php';
//var_dump($_FILES);
foreach ($_POST as $key => $value) {
  var_dump('<p>'.$key.' : '.$value.'</p>');
}


if (isset($_POST)) {
  $data = [
    'titre' => $_POST['billet_titre'],
    'corps_texte' => $_POST['billet_cdt'],
    'categorie' => $_POST['categorie'],
    'id' => $_POST['id']
  ];

  $titre = $_POST['billet_titre'];
  $corps_texte = $_POST['billet_cdt'];
  $categorie = $_POST['categorie'];
  $id = $_POST['id'];
  $exTitle = $_POST['exTitle'];

  if (!empty($_FILES['billet_img']['name'])) {

    $img_blob = addslashes(file_get_contents($_FILES['billet_img']['tmp_name']));

    $update_post = $channel->prepare
    (
      'UPDATE billet
      SET titre = ?, corps_de_texte = ?, image = ?, categorie = ?
      WHERE id_billet = ?;
    ');

    $update_post->execute([$titre, $corps_texte, $img_blob, $categorie, $id]);

    if ($exTitle != $titre){
      unlink('./public/images/'.$exTitle);
    }

  } else {

    $update_post = $channel->prepare
    (
      'UPDATE billet
      SET titre = :titre, corps_de_texte = :corps_texte, categorie = :categorie
      WHERE id_billet = :id;
    ');

    $update_post->execute($data);

    if ($exTitle != $data['titre']){
      unlink('../../public/images/'.$exTitle.'.jpeg');
    }

    echo "L'article a bien été mis a jour";

  }
}









 ?>
