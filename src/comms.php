<article class="comm">
  <div>
    <img src="src/forest.jpg" alt="">
    <h3>nom_auteur</h3>
    <p>dit :</p>
    <div>
      <p><a href="#">Date a Heure</a></p>
    </div>
  </div>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <div class="d_button">
    <button type="button" class="answer" name="button">Repondre</button>
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
