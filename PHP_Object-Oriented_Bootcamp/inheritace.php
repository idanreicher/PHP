<?php

class Animal
{
    public $weight;

    public function eat()
    {
        echo 'all animals can eat';
    }

    public function reproduse()
    {
        echo 'all animals can reproduse';
    }
}

class Mammal extends Animal
{
    public $heartRate;

    public function breathe()
    {
        echo 'I can breathe cuase im a mammal';
    }
}

class Dog extends Mammal
{
    public $color;

    public function bark()
    {
        echo 'i can bark because im a ' . __CLASS__;
    }

    public function breathe()
    {
        echo 'overiding parents function';
    }

    public function chase()
    {
        echo 'i am chasing a rabbit';
    }
}

header('Content-Type:text/plain', true);

$brown = new Dog;

$brown->weight = 7.3;
$brown->color = 'brown';
$brown->heartRate = 'ok';

var_dump($brown);

echo $brown->bark(), PHP_EOL;
echo $brown->chase(), PHP_EOL;
echo $brown->eat(), PHP_EOL;
echo $brown->reproduse(), PHP_EOL;

echo $brown->breathe(), PHP_EOL;
