<?php

include 'db.php';

$nom = $_POST['name'];
$prenom = $_POST['firstName'];
$pseudo = $_POST['alias'];
$pw = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
$email = $_POST['e_mail'];
$role = 2;
$phone = $_POST['phoneNumber'];
$avatar = null;

$data_user = [
  'nomU' => $nom,
  'prenomU' => $prenom,
  'pseudoU' => $pseudo,
  'pwU' => $pw,
  'emailU' => $email,
  'roleU' => $role,
  'phoneU' => $phone,
  'avatarU' => $avatar
];

$insert_user = $channel->prepare
(
  'INSERT INTO utilisateur (nom, prenom, pseudo, mot_de_passe, e_mail, telephone, role, avatar)
  VALUES (:nomU, :prenomU, :pseudoU, :pwU, :emailU, :phoneU, :roleU, :avatarU);
');


$insert_user->execute($data_user);


//include '../../test.phtml';

header('Location: ../../connexion.php');
 ?>
