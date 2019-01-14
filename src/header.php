<?php session_start();
$_SESSION['user_data'] = null;
if (isset($_SESSION['user_data'])) {
  $test = 1;
} else {
  $test = null;
} ?>
<header id="header">
  <?php if($test && $_SESSION['user_data']['role'] == 0): ?>
    <a href="./admin.php" id="admin"><h2>Admin</h2></a>
  <?php endif; ?>
  <h1>Blog</h1>
  <nav id="h_nav">
    <ul>
      <li><a href="index.php"><h2>Accueil</h2></a></li>

      <?php if($test && $_SESSION['user_data']['role'] == 0 || $test && $_SESSION['user_data']['role'] == 1): ?>
        <li><a href="billet.php"><h2>Billets</h2></a></li>
      <?php endif; ?>

      <?php if (!$test): ?>
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
