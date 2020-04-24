<?php

class DBConn
{
    private static $instance ;
    private static $host = '127.0.0.1';
    private static $db   = 'test';
    private static $user = 'root';
    private static $pass = '';
    private static $port = "3306";
    private static $charset = 'utf8mb4';
    private static $options = [
                                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                                PDO::ATTR_EMULATE_PREPARES   => false,
                            ];

    private function __construct()
    {
    }
    private function __clone()
    {
    }

    public static function getInstance()
    {
         
        if (!self::$instance) {
            try {
                self::$instance = new PDO("mysql:host=". self::$host .";
                dbname=". self::$db .";
                charset=". self::$charset .";
                port=". self::$port  , self::$user, self::$pass, self::$options);
                 
            } catch (PDOException $e) {
                throw new PDOException($e->getMessage(), (int)$e->getCode());
            }          
        } else {
            echo "old instance \n";    
            return self::$instance;
        }
        
        echo "new instance \n";
        return self::$instance;
    }
   
   
}
