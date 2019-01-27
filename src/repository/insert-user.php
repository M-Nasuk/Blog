<?php

include '../utilities.php';
include 'db.php';

$nom = $_POST['name'];
$prenom = $_POST['firstName'];
$pseudo = $_POST['alias'];
$pw = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
$email = $_POST['e_mail'];
$role = 2;
$phone = $_POST['phoneNumber'];
$avatar = addslashes(file_get_contents($_FILES['avatar']['tmp_name']));

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

insertUser($channel, $data_user);

header('Location: ../../connexion.php');

 ?>
