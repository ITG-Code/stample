<?php


require_once '../app/Core/App.php';
require_once '../app/Core/Controller.php';

require_once '../app/Core/Database.php';
require_once '../app/Core/DatabaseConfig.php';
require_once '../app/Helpers/Redirect.php';
require_once '../app/Helpers/Session.php';
Session::start();
$app = new App;