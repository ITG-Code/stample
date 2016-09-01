<?php
use Stample\Core\App;
use \Stample\Helpers\Session;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
define('INC_ROOT', dirname(__DIR__));
require_once INC_ROOT . '/vendor/autoload.php';
\php_error\reportErrors();

Session::start();

$app = new App;