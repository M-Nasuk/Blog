<?php

include "./repository/select.php";

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
    <p><?= var_dump($posts_results);?></p>
    <p><?= var_dump($posts_results)[0];?></p>
    <p><?= var_dump($posts_results[0]['titre']);?></p>
    <p><?= var_dump(date('d F y H:i',strtotime($posts_results[0]['date_de_publication'])));?></p>
    <p><?= changeMonth($posts_results[0]['date_de_publication']);?></p>
    <p><?php $date = changeMonth($posts_results[0]['date_de_publication']); echo var_dump($date[0]);?></p>
    <p><?= var_dump(str_replace($date[0], $date[1], date('d F y H:i',strtotime($posts_results[0]['date_de_publication']))));?></p>
  </div>
</section>
