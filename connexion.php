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
    <title>Connexion</title>
  </head>
  <body id="connexion">

    <main>
      <form id="log_in" action="index.php" method="post">
        <h2>Connexion au Blog</h2>
        <fieldset>
          <ul>
            <li>
              <label>Identifiants</label>
              <input type="text" name="pseudo">
            </li>
            <li>
              <label>Mot de passe</label>
              <input type="password" name="pw">
            </li>
            <li>
              <button type="submit" name="button">Valider</button>
            </li>
          </ul>
        </fieldset>
      </form>
      <div id="sign_in_link">
        <h2><a href="sign-in.php">Pas encore inscrit? Cliquez ICI !</a></h2>
      </div>
    </main>
  </body>
</html>
