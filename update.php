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
$pw = password_hash($_POST['pwd'], PASSWORD_DEFAULT);;
$champ = $_POST['champ'];

$update_pwd = $channel->prepare
(
  'UPDATE utilisateur
  SET ? = ?
  WHERE pseudo = ?;
');

$update_pwd->execute([$champ, $pw, $pseudo]);

//$_POST = null;




include './template/update.phtml'; ?>
