<?php


CONST MOIS = [
  'January'=> 'Janvier',
  'February'=> 'Fevrier',
  'March'=> 'Mars',
  'April'=> 'Avril',
  'May'=> 'Mai',
  'June'=> 'Juin',
  'July'=> 'Juillet',
  'August'=> 'Aout',
  'September'=> 'Septembre',
  'October'=> 'Octobre',
  'November'=> 'Novembre',
  'December'=> 'Decembre'
];

function changeMonth($a)
{
  foreach (MOIS as $key => $value) {
    if ($key == date('F',strtotime($a))) {
      return [$key, $value];
    }
  }
}

function insertUser($db, $data)
{
  $insert_user = $db->prepare
  (
    'INSERT INTO utilisateur (nom, prenom, pseudo, mot_de_passe, e_mail, telephone, role, avatar)
    VALUES (:nomU, :prenomU, :pseudoU, :pwU, :emailU, :phoneU, :roleU, :avatarU);
  ');

  $insert_user->execute($data);
}

function userLogin($db, $pseudo)
{
  $user = $db->prepare
  (
    'SELECT *
    FROM utilisateur
    WHERE pseudo = ?;
  ');


  $user->execute([$pseudo]);
  $user_result = $user->fetch(PDO::FETCH_ASSOC);

  if (password_verify($_POST['pwd'], substr($user_result['mot_de_passe'], 0, 60))) {
    session_start();
    $_SESSION['user_data'] = $user_result;
    $image = $user_result['pseudo'].'.jpeg';
    file_put_contents('../../public/user/'.$image, stripslashes($user_result['avatar']));
    header("Location: ../../logged.php");
  } else {
    session_start();
    $_SESSION['error'] = 'Pseudo ou mot de passe non valide !';
    header('Location: ../../connexion.php');
  }
}
?>
