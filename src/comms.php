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
    <button type="button" class="answer" name="button" onclick="displayAnwserForm()">Repondre</button>
    <script type="text/javascript">
      getData('./src/comm-form.php', function(){ (response).appendTo($('.answer'));});
    </script>
  </div>
</article>
