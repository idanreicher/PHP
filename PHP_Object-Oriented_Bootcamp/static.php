<?php

class Database
{
    private static $pdo;
    public static $operators = ['=', '<>', 'and', 'or', 'like'];
    private $table;

    public function connect(String $method)
    {
        $obj = new static;
        $obj->table;
        self::$pdo = $method;
    }

    public static function create(array $date)
    {
        echo 'creating a new db ', self::$pdo;
    }

    public function getMethod()
    {
        return self::$pdo;
    }
}


header('Content-type:text/plain', true);

var_dump(Database::$operators);
 Database::connect('pdo');
Database::create([]);
$db = new Database;
echo $db->getMethod();
