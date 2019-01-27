<?php

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

/*    $img = '';
    if (!empty($_FILES['avatar']['name'])){
      $data['avatar'] = addslashes(file_get_contents($_FILES['avatar']['tmp_name']));
      $img = ", avatar = :avatar";
    }
*/
/*    if ($_POST['exPseudo'] != $_POST['pseudo']){
      unlink('../../public/user/'.$_POST['exPseudo'].'.jpeg');
      $image = $_POST['pseudo'].'.jpeg';
      file_put_contents('../../public/user/'.$image, file_get_contents($_FILES['avatar']['tmp_name']));
    }
*/
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
