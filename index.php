<?php
session_start();
include './src/repository/select-all.php';

if (!$_SESSION) {
  include 'template/blog.phtml';
} else {
  include 'template/blog-logged.phtml';
}

//include './src/repository/logged-in.php';


?>
