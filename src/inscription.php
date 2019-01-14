<?php session_start(); ?>

<?php if (!isset($_SESSION['test'])): ?>
  <div id="sign_in_link">
    <h2><a href="sign-in.php">Pas encore inscrit? Cliquez ICI !</a></h2>
  </div>
<?php endif; ?>
