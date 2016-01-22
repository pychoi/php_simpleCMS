<?php

ini_set('display_errors', 'On');  //Turn display error on

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '/views');
define('BASE_URL', 'http://localhost/~pyc/cms/');
// echo APP_ROOT;

$db = new PDO('mysql:host=localhost;dbname=cms', 'root', 'hhsp');

require 'functions.php';

?>