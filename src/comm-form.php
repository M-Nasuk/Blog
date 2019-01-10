<?php session_start(); ?>
<div class="hide d_form">
  <form action="./src/repository/insert-comm.php" method="post">
    <fieldset>
      <h2>Rediger votre commentaire</h2>
      <ul>
        <li>
          <label>Commentaires</label>
          <textarea name="ta_comm" rows="6" cols="40"></textarea>
          <input type="hidden" name="user_id" value="<?= $_SESSION['user_data']['id_utilisateur']; ?>">
          <input type="hidden" name="billet_id" value="<?= $_SESSION['billet_id']; ?>">
          <input type="hidden" name="datetime" value="<?= date('Y-m-d H:i:s');  ?>">
        </li>
        <li>
          <button type="submit" name="button">Laisser un commentaire</button>
        </li>
      </ul>
    </fieldset>
  </form>
</div>
