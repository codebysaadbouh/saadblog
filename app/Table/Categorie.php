<?php

namespace App\Table;
use App\App;


class Categorie extends Table{
 
    protected static $table = 'categories';


    public  function getUrl()
    {
        return 'index.php?p=categorie&id='.$this->id;
    }

    
    public static function getCatOnClick()
    {
        return App::getDb()->query('SELECT * FROM categories WHERE id = ?', [$_GET['id']], 'App\Table\Categorie', true);
    }
}