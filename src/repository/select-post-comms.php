<?php
session_start();
include 'db.php';

$comms_view = $channel->prepare
(
  'SELECT c.*, u.nom, u.pseudo
  FROM commentaires as c
  INNER JOIN utilisateur as u on c.author = u.id_utilisateur
  WHERE c.billet = ?;
');

$comms_view->execute([$_SESSION['billet_id']]);
$comms_results = $comms_view->fetchAll(PDO::FETCH_ASSOC);

$_SESSION['comms'] = $comms_results;

 ?>
