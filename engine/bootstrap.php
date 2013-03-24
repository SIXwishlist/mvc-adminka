<?php
require_once '/lib/system/Autoloader.php';
$Autoloader = new Autoloader();
$Router = new Router();
$Router::run();
?>