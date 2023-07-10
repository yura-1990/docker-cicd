<?php
# OOP

// Encapsulation - change data from outside the class with public method

class Person
{
    private $name;
    private $age;

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setAge($age): void
    {
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}

$person = new Person();
$person->setName('Murod');
$person->setAge(33);

echo $person->getName();
echo ' ';
echo $person->getAge();