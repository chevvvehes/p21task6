<?php

require_once 'Rectangle.php';

try {
    $rectangle = new Rectangle(5.0, 3.0);

    echo "Площадь прямоугольника: " . $rectangle->getArea() . " кв. единиц" . PHP_EOL;
    echo "Периметр прямоугольника: " . $rectangle->getPerimeter() . " единиц" . PHP_EOL;
} catch (InvalidArgumentException $e) {
    echo "Ошибка: " . $e->getMessage() . PHP_EOL;
}