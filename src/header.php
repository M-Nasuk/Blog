<?php session_start(); ?>
<header id="header">
  <h1>Blog</h1>
  <nav id="h_nav">
    <ul>
      <li><a href="index.php"><h2>Accueil</h2></a></li>
      <li><a href="billet.php"><h2>Billets</h2></a></li>
      <?php if (!$_SESSION): ?>
        <li><a href="connexion.php"><h2>Connexion</h2></a></li>
      <?php else: ?>
        <li id="user_box">
          <a href="#">
            <h2><?php echo $_SESSION['user_data']['pseudo']; ?></h2>
          </a>
          <ul>
            <li>
              <a href="log-out.php">
                <h2>Se Deconnecter</h2>
              </a>
            </li>
          </ul>

        </li>
      <?php  endif; ?>
    </ul>
  </nav>
</header>
