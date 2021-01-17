<?php

use App\App;
use \App\Autoloader; 
require '../app/Autoloader.php';
Autoloader::register();

$app = App::getinstance();

var_dump($posts = $app->getTable('Articles')); 

