<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Nouveau Billet</title>
  </head>
  <body id="new_billet">
    <header id="header">
      <h1>Blog</h1>
      <nav id="h_nav">
        <ul>
          <li><a href="index.php">Accueil</a></li>
          <li><a href="#">Themes</a></li>
          <li><a href="billet.php">Billets</a></li>
          <li><a href="#">Connexion</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <h1>Nouveau Billet</h1>
      <form class="" action="billet.php" method="post">
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
