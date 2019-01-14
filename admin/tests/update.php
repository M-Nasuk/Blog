<?php

include './src/repository/db.php';


$var = addslashes(file_get_contents($_FILES['test']['tmp_name']));
$id = $_POST['id'];



$update_img = $channel->prepare
(
  'UPDATE billet
  SET image = ?
  WHERE id_billet = ?;
');

$update_img->execute([$var, $id]);



$pseudo = $_POST['pseudo'];
$mail = $_POST['pwd'];
$pw = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
$champ = $_POST['champ'];
$avatar = addslashes(file_get_contents($_FILES['avatar']['tmp_name']));

$update_pwd = $channel->prepare
(
  'UPDATE utilisateur
  SET mot_de_passe = ?
  WHERE pseudo = ?;
');

$update_pwd->execute([$pw, $pseudo]);

//$_POST = null;




include './template/update.phtml'; ?>
