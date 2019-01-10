<?php
session_start();
$_SESSION['billet_id'] = $_GET['id'];

include './template/single-post.phtml';

?>
