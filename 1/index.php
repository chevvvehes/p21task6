<?php

require_once 'Car.php';

$car = new Car("BMW", "X5", 2020, 50000);

echo $car->getInfo() . PHP_EOL;

$car->drive(100);

echo "Обновленный пробег: " . $car->getMileage() . " км" . PHP_EOL;
