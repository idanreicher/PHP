<?php

spl_autoload_register(function($className){

    include 'src/' . $className . '.php'; 

});
// header('Content-Type:text/plain', true);

$pdo = (new PDOClient('mysql', 'localhost' ,'sakila' , 'root', ''))->connect();

$mysqli = (new MySQLiClient('localhost' ,'sakila' , 'root', ''))->connect();

$products_pdo = $pdo->select('select * from store')->get();
$products_mysqli = $mysqli->select('select * from store')->get();

$handler = $mysqli->getConnection();
echo 'handler ';
$results_handler = $handler->query('select * from store');
var_dump($results_handler);

echo 'pdo  ';
var_dump($products_pdo);
echo 'mysqli  ';
var_dump($products_mysqli);

