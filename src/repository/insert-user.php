<?php

include 'db.php';

$nom = $_POST['name'];
$prenom = $_POST['firstName'];
$pseudo = $_POST['alias'];
$pw = $_POST['pwd'];
$email = $_POST['e_mail'];
$role = 2;
$phone = $_POST['phoneNumber'];
$avatar = null;

$data_user = [
  'nom' => $nom,
  'prenom' => $prenom,
  'pseudo' => $pseudo,
  'pw' => $pw,
  'email' => $email,
  'role' => $role,
  'phone' => $phone,
  'avatar' => $avatar
];

$insert_user = $channel->prepare
(
  'INSERT INTO utilisateur (nom, prenom, pseudo, mot_de_passe, e_mail, telephone, role, avatar)
  VALUES (:nom, :prenom, :pseudo, :pw, :email, :role, :phone, :avatar);
');

$insert_user->execute([$nom,$prenom,$pseudo,$pw,$email,$role,$phone,$avatar]);




header('Location: ../../index.php');
 ?>
