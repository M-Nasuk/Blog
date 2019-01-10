<?php

include 'db.php';

$comm = $_POST['ta_comm'];
$user = $_POST['user_id'];
$billet = $_POST['billet_id'];
$datetime = $_POST['datetime'];

$insert_comm = $channel->prepare
(
  'INSERT INTO commentaires (author, date_de_publication, texte, billet)
  VALUES (?,?,?,?);
');

$insert_comm->execute([$user, $datetime, $comm, $billet]);


$url = $_SERVER['HTTP_REFERER'];

header("Refresh:0; url=$url");


 ?>
