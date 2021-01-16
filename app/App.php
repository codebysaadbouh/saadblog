<?php

namespace App;

class App{

    public $title = 'saadblog'; 
    private static $_instance; 

    
    public static function getinstance(){
        if(is_null(self::$_instance)){
            self::$_instance = new App(); 
        }
        return self::$_instance; 
    }



}