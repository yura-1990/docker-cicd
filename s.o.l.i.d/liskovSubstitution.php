<?php
# S.O.L.I.D
// Liskov Substitution

class Shape
{
    protected string $color;

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getArea(): int|float
    {
        return 0;
    }

}

class Rectangle extends Shape
{
    protected int|float $width;
    protected int|float $height;

    public function __construct($color, $width, $height)
    {
        parent::__construct($color);
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(): int|float
    {
        return $this->width * $this->height;
    }
}

class Circles extends Shape
{
    protected int|float $radius;

    public function __construct($color, $radius){
        parent::__construct($color);
        $this->radius = $radius;
    }

    public function getArea(): int|float
    {
        return pi() * pow($this->radius, 2);
    }
}

$rectangle = new Rectangle('red', 500, 450);
$circle = new Circles('black', 50);

$shapes = [$rectangle, $circle];

foreach ($shapes as $shape){
    echo 'color: ' . $shape->getColor() . '  ';
    echo 'Area: ' . $shape->getArea() . '  ';
    echo "\r\n";
}

/* Liskov Substitution - child acts as its parent */
