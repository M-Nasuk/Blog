<form class="" action="index.html" method="post">
 <fieldset id="fd">
   <ul>
     <li>
       Titre :<input type="text" name="" value="<?= $posts_results['titre']; ?>">
     </li>
     <li>ID :<input type="text" name="" value="<?= $key['id_billet']; ?>"></li>
     <li>Titre :<input type="text" name="" value="<?= $key['titre']; ?>"></li>
     <li>Corps :<textarea name="name" rows="6" cols="30"><?= $key['corps_de_texte']; ?></textarea></li>
     <li>Image :<input type="file" name="" value="">
       <img src="<?= './public/images/'.$key['titre'].'.jpeg'; ?>" alt="">
     </li>
     <li>
       <label>Categorie :</label>
       <select name="cat">
         <?php foreach ($cat_results as $key): ?>
           <option value="<?= $key['id_categorie']; ?>"><?= $key['nom']; ?></option>
         <?php endforeach; ?>
       </select>
     </li>
     <li>
       <label>Auteur :</label>
       <select name="user">
         <?php foreach ($users_results as $key): ?>
           <option value="<?= $key['id_utilisateur']; ?>"><?= $key['pseudo']; ?></option>
         <?php endforeach; ?>
       </select>
   </li>
   </ul>
 </fieldset>
</form>
