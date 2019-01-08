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
    <title>Nouveau Billet</title>
  </head>
  <body id="new_billet">

    <main>
      <h1>Nouveau Billet</h1>
      <form class="" action="billet.php" method="post" enctype="multipart/form-data">
        <fieldset>
          <ul>
            <li>
              <label for="titre">Titre :</label>
              <input type="text" name="title">
            </li>
            <li>
              <label for="categorie">Theme :</label>
              <select name="categorie">
                <option value="null">Choisissez une categorie</option>
              </select>
            </li>
            <li>
              <label for="description">Sujet :</label>
              <textarea name="subject" rows="8" cols="80"></textarea>
            </li>
            <li>
              <label for="image">Image :</label>
              <input type="file" name="img" accept="image/*">
            </li>
            <li>
              <label for="save">Enregistrer votre billet ?</label>
              <button type="button" value="send">Valider</button>
            </li>
          </ul>
        </fieldset>
      </form>
    </main>
  </body>
</html>

<?php





?>
