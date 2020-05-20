<?php

class Database
{
    private static $pdo;
    public static $operators = ['=', '<>', 'and', 'or', 'like'];
    private $table;

    public static function connect(String $method)
    {
        self::$pdo = $method;
        return new static;
    }
    
    public function table(String $table)
    {
        $this->table = $table;
        return $this;
    }
    
    public function insert(array $date)
    {
        echo 'connected to db using ', self::$pdo;
        echo " inserting into {$this->table} values " . json_encode($date);
    }
}


header('Content-type:text/plain', true);

var_dump(Database::$operators);
Database::connect('pdo')->table('users')->insert(['name' => 'terry']);
