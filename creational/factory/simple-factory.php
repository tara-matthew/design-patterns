<?php
interface Vehicle
{
    public function drive(): void;
}

class Car implements Vehicle
{
    public function drive(): void
    {
        echo "Driving a car." . PHP_EOL;
    }
}

class Motorcycle implements Vehicle
{
    public function drive(): void
    {
        echo "Riding a motorcycle." . PHP_EOL;
    }
}

class VehicleFactory
{
    public function createVehicle(string $type): Vehicle
    {
        switch ($type) {
            case 'car':
                return new Car();
            case 'motorcycle':
                return new Motorcycle();
            default:
                throw new \InvalidArgumentException("Invalid vehicle type: $type");
        }
    }
}

$factory = new VehicleFactory();

$car = $factory->createVehicle('car');
$car->drive();  // Output: Driving a car.

$motorcycle = $factory->createVehicle('motorcycle');
$motorcycle->drive();  // Output: Riding a motorcycle.
