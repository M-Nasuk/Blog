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

if (password_verify($_POST['pwd'], substr($user_result['mot_de_passe'], 0, 60))) {
  header('Location: ../../logged.php');
} else {
  header('Location: ../../connexion.php');
}


?>
