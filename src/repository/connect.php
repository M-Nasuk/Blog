<?php

include 'db.php';

$user = $channel->prepare
(
  'SELECT *
  FROM utilisateur
  WHERE pseudo = ?;
');


$user->execute([$_POST['pseudo']]);
$user_result = $user->fetch(PDO::FETCH_ASSOC);
$id_user = $user_result['id_utilisateur'];

if (password_verify($_POST['pwd'], substr($user_result['mot_de_passe'], 0, 60))) {
  session_start();
  $_SESSION['user_data'] = $user_result;
  file_put_contents('../../admin/users/avatars/'.$user_result['pseudo'].'.jpeg', stripslashes($user_result['avatar']));


  //$url = $_SERVER['HTTP_REFERER'];
  //header("Refresh: 3; url=$url");
  header("Location: ../../logged.php");
  //header("Location: ../../test.php");
} else {
  header('Location: ../../connexion.php');
}

?>
