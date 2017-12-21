<?php
session_start();
require_once "autoload.php";

use components\App;

$app = App::getInstance();
$app->run();