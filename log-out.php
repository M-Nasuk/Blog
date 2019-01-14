<?php

session_start();

session_unset();

session_destroy();

session_start();

$_SESSION['user_data'] = null;

header('Location: '.$_SERVER['HTTP_REFERER']);

 ?>
