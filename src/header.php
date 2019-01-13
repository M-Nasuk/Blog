<?php session_start();
if (isset($_SESSION['user_data'])) {
  $_SESSION['test'] = 1;
} else {
  $_SESSION['test'] = null;
} ?>
<header id="header">
  <h1>Blog</h1>
  <nav id="h_nav">
    <ul>
      <li><a href="index.php"><h2>Accueil</h2></a></li>
      <li><a href="billet.php"><h2>Billets</h2></a></li>
      <?php if (!$_SESSION['test']): ?>
        <li><a href="connexion.php"><h2>Connexion</h2></a></li>
      <?php else: ?>
        <li id="user_box">
          <a href="#">
            <img width="50" height="50 "src="public/user/<?= $_SESSION['user_data']['pseudo'];?>.jpeg" alt="">
            <h2 style="display: inline-block;"><?php echo $_SESSION['user_data']['pseudo']; ?></h2>
          </a>
          <ul>
            <li>
              <a href="log-out.php">
                <h2 style="display:inline-block; text-align: center;">Se Deconnecter</h2>
              </a>
            </li>
          </ul>

        </li>
      <?php  endif; ?>
    </ul>
  </nav>
</header>
