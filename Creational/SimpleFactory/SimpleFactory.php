<?php

namespace Creational\SimpleFactory;

class SimpleFactory
{
    public function createDog()
    {
        return new Dog();
    }

    public function createCat()
    {
        return new Cat();
    }
}