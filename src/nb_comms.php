<?php session_start(); ?>

<h2 class="nbcomm"><?= count($_SESSION['comms']); ?> commentaires sur <?= $_SESSION['title']; ?></h2>

<?php if (count($_SESSION['comms']) == 0): ?>
	<h3>Soyez le premier a poster un commentaire !!</h3>
<?php endif; ?>
