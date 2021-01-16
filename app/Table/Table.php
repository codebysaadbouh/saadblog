<?php
namespace App\Table;
use App\App;

class Table {
    
    protected static $table;

    /**
     * @return : Toutes les informations d'une table (Par exemple Articles et Catégorie)
     */
    public static function All(){
        return App::getDb()->query("SELECT * FROM ".static::$table."", \get_called_class());
    }

    /**
     * @param $id 
     * @return : retourner une ligne specifique
     */
    public static function find($id){
        return self::query("SELECT * FROM ". static::$table . " WHERE id = ? ", [$id], get_called_class(), true);
    }

    /**
     * @param $statement : Correspond à la requête SQL À FAIRE
     * @param $attribute : est obligatoire pour les requêtes préparées (Stockée en mémoire)
     * @param $one : est un booléen permettent de specicifier le fetch (Une ligne retournée) et le fecthAll (Autant de lignes qu'il y a de réponses)
     * 
     * @return $data : les données demandées
     */
    public static function query($statement, $attribute = null, $one=false){
        if ($attribute) {
            return App::getDb()->prepare($statement, $attribute, \get_called_class(), $one);
        } else {
            return App::getDb()->query($statement, \get_called_class(), $one);
        }
    }
}
