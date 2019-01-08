<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/utilities.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <title>Inscription</title>
  </head>
  <body id="inscription">

    <main id="sign">
      <form id="sign_in" action="sign-in.php" method="post" enctype="multipart/form-data">
        <h2>Inscription</h2>
        <fieldset>
          <ul>
            <li>
              <label>Nom</label>
              <input type="text" name="">
            </li>
            <li>
              <label>Prenom</label>
              <input type="text" name="name">
            </li>
            <li>
              <label>Pseudo</label>
              <input type="text" name="firstName">
            </li>
            <li>
              <label>Password</label>
              <input type="text" name="pwd">
            </li>
            <li>
              <label>Email</label>
              <input type="e_mail" name="e_mail">
            </li>
            <li>
              <label>Telephone</label>
              <input type="tel" name="phoneNumber">
            </li>
            <li>
              <label>Avatar</label>
              <input type="file" name="avatar">
            </li>
            <li>
              <button type="submit" name="button">Enregistrer</button>
            </li>
          </ul>
        </fieldset>
      </form>
    </main>
  </body>
</html>
