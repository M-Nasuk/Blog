<?php

include './src/repository/db.php';


$var = addslashes(file_get_contents($_FILES['test']['tmp_name']));
$id = $_POST['id'];


$update = $channel->prepare
(
  'UPDATE billet
  SET image = ?
  WHERE id_billet = ?;
');

$update->execute([$var, $id]);









include './template/update.phtml'; ?>
