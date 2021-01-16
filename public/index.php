<?php

use \App\Autoloader; 
require '../app/Autoloader.php';
Autoloader::register();


$app = \App\App::getinstance(); 

var_dump($app->title); 