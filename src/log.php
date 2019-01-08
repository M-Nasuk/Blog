<?php

include "./repository/select-all.php";
//include "./src/repository/insert-billet.php";
/*  Log CSS style
#d_log {
  display: none;
}

#check_log:checked + #d_log {
  display: block;
}
*/

?>

<section style="width: 50%; background: #fff; margin: 0 auto; border: 2px solid #000;">
  <h2 style="display: inline-block">See Log</h2>
  <input type="checkbox" name="check_log" id="check_log">
  <div id="d_log">
    <p style="text-align: center;">Log</p>
    <p><?= var_dump($cat_results); ?></p>
    <p><?= var_dump($cat_results[0]['nom']);?></p>
    <p><?= var_dump($_POST); ?></p>
    <p><?= var_dump($_GET);?></p>
    <p><?= var_dump($_FILES['img']['tmp_name']);?></p>
    <p><?= var_dump(addslashes(file_get_contents($_FILES['img']['tmp_name'])));?></p>
    <p><?php echo date('l jS \of F Y h:i:s A'); ?></p>
  </div>
</section>
