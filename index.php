<?php

use MyProject\Product as Product;
use MyProject\Food\Candy as Candy;
use MyProject\Food\Cookie as Cookie;

function __autoload($className){
    $className = substr(strrchr($className, '\\'), 1 );
    $class = 'Classes/'.str_replace('\\','/',$className).'.php';
    require_once ($class);
}
/*require_once "Classes/Product.php";
require_once "Classes/Cookie.php";
require_once "Classes/Candy.php";*/

$product = new Product("Coca","3.88$");
$cookie = new Cookie("Oreo","2$");
$candy = new Candy("Lollipop","1.5$");

echo $product;
echo "<br>";
echo $cookie;
echo "<br>";
echo $candy;