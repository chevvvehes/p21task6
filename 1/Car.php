<?php

class Car
{
    private string $make;
    private string $model;
    private int $year;
    private int $mileage;

    public function __construct(string $make, string $model, int $year, int $mileage)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->mileage = $mileage;
    }

    public function getInfo(): string
    {
        return "Машина: {$this->make}, модель: {$this->model}, год: {$this->year}, пробег: {$this->mileage} км";
    }

    public function drive(int $km): void
    {
        if ($km > 0) {
            $this->mileage += $km;
        } else {
            echo "Ошибка: количество километров должно быть положительным числом." . PHP_EOL;
        }
    }

    public function getMileage(): int
    {
        return $this->mileage;
    }
}