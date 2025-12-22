<?php

require_once 'Animal.php';

class Cat extends Animal
{
    private string $color;

    public function __construct(string $name, int $age, string $color)
    {
        parent::__construct($name, $age, 'Кошка');
        $this->color = $color;
    }

    public function makeSound(): void
    {
        echo "Мяу!" . PHP_EOL;
    }

    public function getInfo(): string
    {
        return parent::getInfo() . ", Цвет: {$this->color}";
    }
}