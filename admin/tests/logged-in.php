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

//echo var_dump($_SESSION['user_data']);








 ?>
