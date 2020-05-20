<?php

spl_autoload_register(function($className){

    include 'src/' . $className . '.php'; 

});

header('Content-Type:text/plain', true);

$dog = new Dog();
$lion = new Lion();
$rabbit = new Rabbit();

$dog->chase($rabbit);
$dog->kill($rabbit);

$lion->chase($dog);
$lion->kill($dog);

$rabbit->chasedBy($dog);
$rabbit->killedBy($dog);

