<?php

class Product
{
    // properties
    public $name = "soda";

    public function showProduct()
    {
        echo "<br> Name: " . $this->name . "<br>";
    }
}

$pepsi = new Product();
$pepsi->name = "pepsi";

// var_dump($pepsi);
$pepsi->showProduct();

echo "<br>";

$fanta = new Product();
$fanta->name = "fanta";

// var_dump($fanta);
$fanta->showProduct();

echo "<br>";

$sprite = new Product();
$sprite->name = "sprite";

// var_dump($sprite);
$sprite->showProduct();

echo "<br>";

$sisi = new Product();

// var_dump($sisi);
$sisi->showProduct();