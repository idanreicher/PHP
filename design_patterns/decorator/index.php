<?php

// Base Component
interface Pizza
{
    public function getDesc() : String;
    public function getPrice(): Float;
}

// Concrete Component
class Margherita implements Pizza
{
    public function getDesc() : String
    {
        return "Margherita ";
    }

    public function getPrice() : Float
    {
        return 55.75;
    }
}

class VeggieParadise implements Pizza
{
    public function getDesc() : String
    {
        return "Veggie Paradise ";
    }

    public function getPrice() : Float
    {
        return 60.5;
    }
}

// Base Decorator
class PizzaToppings implements Pizza
{
    protected $pizza;

    public function __construct(Pizza $pizza)
    {
        $this->pizza = $pizza;
    }

    public function getDesc(): String
    {
        return $this->pizza->getDesc();
    }

    public function getPrice(): Float
    {
        return $this->pizza->getPrice();
    }
}

// Concrete Decorator
class ExtraCheese extends PizzaToppings
{
    public function getDesc(): String
    {
        return parent::getDesc() . "Extra Cheese ";
    }

    public function getPrice(): Float
    {
        return parent::getPrice() + 5;
    }
}

class Jalapeno extends PizzaToppings
{
    public function getPrice(): Float
    {
        return parent::getPrice() + 2;
    }
    public function getDesc(): String
    {
        return parent::getDesc() . "Jalapeno ";
    }
}


function makePizza(Pizza $pizza)
{
    echo "Your Order: " . $pizza->getDesc();

    echo "Price: " . $pizza->getPrice();
}

$pizza = new Margherita();
$pizza = new ExtraCheese($pizza);
$pizza = new Jalapeno($pizza);

makePizza($pizza);
