<?php
include 'db.php';

$insert_billet = $channel->prepare
(
  'INSERT INTO billet (titre) 
  VALUES ('?');');






 ?>
