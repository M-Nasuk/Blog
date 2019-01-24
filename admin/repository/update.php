<?php

include '../../src/repository/db.php';

if (isset($_POST)) {
  foreach ($_POST as $key => $val) {
    echo '<p>'.var_dump($key).var_dump($val).'</p>';
  }
}

if (isset($_FILES)) {
  var_dump($_FILES);
}










 ?>
