<?php

ob_start();

include 'template/logged.phtml';

header('Refresh: 3; url=index.php');

?>
