<?php
/**
 * 工厂模式
 *      定义一个创建对象的接口，让子类去实例化
 */

include dirname(__FILE__) . '/../../autoload.php';

use Creational\Factory\AnimalFactory;
use Creational\Factory\PetFactory;

$animal = new AnimalFactory();
$dog = $animal->create('dog');
$dog->eat();

$pet = new PetFactory();
$cat = $pet ->create('cat');
$cat->eat();

$pet ->create('pig');