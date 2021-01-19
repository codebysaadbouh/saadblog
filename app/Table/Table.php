<?php
namespace App\Table;
use \App\Database\MysqlDatabase;
class Table {
    protected $table;
    protected $db; 

    public function __construct(MysqlDatabase $db)
    {
        $this->db = $db; 
        if(is_null($this->table)){
            $parts = explode('\\', get_class($this));
            $class_name = end($parts); 
            $this->table = strtolower(str_replace('Table', '', $class_name));
        }
    }

    public function all(){
        return $this->db->query('SELECT * from ' . $this->table); 
    }
}