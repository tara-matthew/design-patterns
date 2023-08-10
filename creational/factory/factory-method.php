<?php

/*
 * Avoid tight coupling between the creator and concrete products
 * SRP - can move product creation code into one place in the program, making the code easier to support
 * Open/Closed Principle - can introduce new types of products into the program without breaking existing client code
*/

/* Factory and car interfaces */

interface CarFactory
{
    public function makeCar(): Car;
}

interface Car
{
    public function getType(): string;
}

/* Concrete implementations of the factory and car */

class SedanFactory implements CarFactory
{
    public function makeCar(): Car
    {
        return new Sedan();
    }
}

class Sedan implements Car
{
    public function getType(): string
    {
        return 'Sedan';
    }
}

/* Client */

$factory = new SedanFactory();
$car = $factory->makeCar();
echo $car->getType();
