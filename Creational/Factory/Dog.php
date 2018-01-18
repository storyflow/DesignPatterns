<?php

namespace Creational\Factory;

class Dog implements Animal
{

    public function __construct()
    {
        echo "创建了一只狗" .PHP_EOL;
    }

    public function eat()
    {
        echo "吃狗粮中" .PHP_EOL;
    }
}