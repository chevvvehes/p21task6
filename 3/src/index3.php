<?php

require_once 'Dog.php';
require_once 'Cat.php';
require_once 'Zoo.php';

$dog = new Dog("Рекс", 5, "Овчарка");
$cat = new Cat("Мурка", 3, "Черный");

$zoo = new Zoo();
$zoo->addAnimal($dog);
$zoo->addAnimal($cat);

echo "🐾 Список животных в зоопарке:" . PHP_EOL;
$zoo->listAnimals();

echo PHP_EOL . "🔊 Звуки животных:" . PHP_EOL;
$zoo->animalSounds();