<?php

# OOP

// abstract class - could not get object notation - Liskov Substitution

abstract class Animal
{
    private static string $color;

    public function setColor(string $color): string
    {
        return self::$color = $color;
    }

    abstract public function makeSound();
}

class Dog extends Animal
{
    public function makeSound(): string
    {
        return 'WOFF WOFF ... ';
    }
}

class Cat extends Animal
{
    public function makeSound(): string
    {
        return 'MIOW MIOW ... ';
    }
}

class DoSomething
{
    public Animal $sound;

    public function __construct(Animal $sound)
    {
        $this->sound = $sound;
    }

    public function getSomething()
    {
        return $this->sound->makeSound();
    }
}

$dog = new Dog;
$cat = new Cat;

$dogSound = new DoSomething($dog);
$catSound = new DoSomething($cat);

echo $dogSound->getSomething();
echo $catSound->getSomething();
