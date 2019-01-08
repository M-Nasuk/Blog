<?php

include 'db.php';

$nom = $_POST['name'];
$prenom = $_POST['firstName'];
$pseudo = $_POST['alias'];
$pw = $_POST['pwd'];
$email = $_POST['e_mail'];
$role = 2;
$phone = $_POST['phoneNumber'];
$avatar = $_POST['avatar'];








header('Location: ../../index.php');
 ?>
