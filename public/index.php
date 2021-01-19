<?php

use App\App;
use \App\Autoloader; 
require '../app/Autoloader.php';
Autoloader::register();

$app = App::getinstance();

$posts = $app->getTable('Articles');
var_dump($posts->all()); 