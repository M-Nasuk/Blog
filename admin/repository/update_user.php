<?php

ob_start();

include '../../src/repository/db.php';
var_dump($_POST);
if (isset($_POST)) {

  if ($_POST['update'] == 'update'){

    $data = [];

    foreach ($_POST as $key => $value) {
      if ($key == 'exPseudo') {
        continue;
      } else {
        $data[$key] = $value;
      }
    }

    $update_user = $channel->prepare
    (
      "UPDATE utilisateur
      SET nom = :nom, prenom = :prenom, /*pseudo = :pseudo,*/ e_mail = :email, telephone = :telephone, role = :role
      WHERE id_utilisateur = :user_id;
    ");

    $update_user->execute($data);

    session_start();
    $_SESSION['user_updated_message'] = "L'utilisateur a bien ete mis a jour";
    header("Location: ../../admin.php");

  } elseif ($_POST['update'] == 'delete') {

    $delete_user = $channel->prepare
    (
      'DELETE FROM utilisateur
      WHERE id_utilisateur = ?;
    ');

    $delete_user->execute([$_POST['user_id']]);

    unlink('../../public/user/'.$_POST['exPseudo'].'.jpeg');

    session_start();
    $_SESSION['user_updated_message'] = "L'utilisateur a bien ete supprime";
    header("Location: ../../admin.php");


  }

}







 ?>
