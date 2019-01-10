<?php include "./repository/select-post-comms.php"; ?>
<?php include "./utilities.php"; ?>

<?php foreach ($_SESSION['comms'] as $key): ?>
  <?php $date = changeMonth($key['date_de_publication']); ?>
  <article class="comm">
    <div>
      <img src="./public/user/<?= $key['pseudo']; ?>.jpeg" alt="<?= $key['pseudo']; ?>_avatar">
      <h3><?= $key['nom']; ?></h3>
      <p>dit :</p>
      <div>
        <p><a href="#"><?= str_replace($date[0], $date[1], date('d F y \a H:i',strtotime($key['date_de_publication']))); ?></a></p>
      </div>
    </div>
    <p style="border: 2px solid #000; border-radius: 5px; padding: 1rem;"><?= $key['texte']; ?></p>
    <div class="d_button">
      <?php if ($_SESSION): ?>
        <button type="button" class="answer" name="button">Repondre</button>
      <?php endif; ?>
      <div class="hide d_form">
        <form action="single-post.php" method="post">
          <fieldset>
            <h2>Rediger votre commentaire</h2>
            <ul>
              <li>
                <label>Commentaires</label>
                <textarea name="ta_comm" rows="4" cols="40"></textarea>
              </li>
              <li>
                <label>Pseudo</label>
                <input type="text" name="pseudo_comm">
              </li>

              <li>
                <button type="submit" name="button">Repondre</button>
              </li>
              <input type="hidden" id="postId" name="postId" value="id_comm">
            </ul>
          </fieldset>
        </form>
      </div>
    </div>
  </article>
<?php endforeach; ?>
