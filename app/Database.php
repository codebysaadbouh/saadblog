<?php
namespace App;
use \PDO;

class Database{

    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;


    /**
     * Database constructor.
     * @param $db_name
     * @param $db_user
     * @param $db_pass
     * @param $db_host
     */
    public function __construct($db_name, $db_user,$db_pass, $db_host){
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }


    //Connexion à la base de données avec la classe PDO
    public function getPDO(){
        if($this->pdo === null){
            $pdo = new PDO('mysql:host=localhost;dbname='.$this->db_name.';charset=utf8',$this->db_user,$this->db_pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }

    //
    public function query($statement, $classname, $one = false){
        $req = $this->getPDO()->query($statement);
        $req->setFetchMode(PDO::FETCH_CLASS, $classname);
        if ($one) {
            $data = $req->fetch();
        } else {
            $data = $req->fetchAll();
        }
        return $data;
    }


    public function prepare($statement, $attribute, $classname, $one = false){
        $req = $this->getPDO()->prepare($statement);
        $req->execute($attribute); 
        $req->setFetchMode(PDO::FETCH_CLASS, $classname);
        if($one)
        {
            $data = $req->fetch();
        }else{
            $data = $req->fetchAll();
        }
        return $data;
    }
}
