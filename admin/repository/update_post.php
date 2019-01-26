<?php

include '../../src/repository/db.php';

if (isset($_POST)) {
  $data = [
    'titre' => $_POST['billet_titre'],
    'corps_texte' => $_POST['billet_cdt'],
    'categorie' => $_POST['categorie'],
    'id' => $_POST['billet_id']
  ];

  $titre = $_POST['billet_titre'];
  $corps_texte = $_POST['billet_cdt'];
  $categorie = $_POST['categorie'];
  $id = $_POST['billet_id'];
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
      unlink('../../public/images/'.$exTitle);
    }

    session_start();
    $_SESSION['billet_updated_message'] = "L'article a bien ete mis a jour";
    header("Location: ../../admin.php");

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

    session_start();
    $_SESSION['billet_updated_message'] = "L'article a bien ete mis a jour";
    header("Location: ../../admin.php");
  }
}

?>
