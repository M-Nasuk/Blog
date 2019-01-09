<?php

include 'db.php';

$user = $channel->prepare
(
  'SELECT *
  FROM utilisateur
  WHERE pseudo = ?;
');

$user->execute([$_POST['pseudo']]);
$user_result = $user->fetchAll(PDO::FETCH_ASSOC);

//password_verify($_POST['pwd'], );











include '../../test.phtml';

?>
