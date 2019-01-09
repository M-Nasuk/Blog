<?php

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
    <p>post</p>
    <p><?= var_dump($_POST); ?></p>
    <?php foreach ($_POST as $key):?>
      <p><?= var_dump($key); ?></p>
    <?php endforeach; ?>

  </div>
</section>
