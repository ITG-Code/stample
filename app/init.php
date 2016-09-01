<?php


require_once '../app/Core/App.php';
require_once '../app/Core/Controller.php';
require_once '../app/Core/DatabaseConfig.php';
require_once '../app/Core/Database.php';
require_once '../app/Helpers/Redirect.php';
require_once '../app/Helpers/Session.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
define('INC_ROOT', dirname(__DIR__));
require_once INC_ROOT.  '/vendor/autoload.php';
\php_error\reportErrors();

Session::start();

$app = new App;