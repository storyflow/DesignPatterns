<?php

include dirname(__FILE__) . '/../../autoload.php';

use Creational\SimpleFactory\SimpleFactory;
$factory = new SimpleFactory();
$dog = $factory->createDog();
$dog->eat('火腿');
$cat = $factory->createCat();
$cat->eat();