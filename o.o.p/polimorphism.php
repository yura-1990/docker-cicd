<?php

# OOP
// Polymorphism - open/close principle

interface ShapeCalculation
{
    public function calculateArea();
}

class SquareShape implements ShapeCalculation
{
    private float|int $radius;

    public function __construct(float|int $radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea(): float|int
    {
        return pi() * pow($this->radius, 2);
    }
}

class RectangleShape implements ShapeCalculation
{
    private float|int $width;
    private float|int $height;

    public function __construct(float|int $width, float|int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(): float|int
    {
        return $this->width * $this->height;
    }
}


$squareShape = new SquareShape(5.6);
$rectangleShape = new RectangleShape(5.6, 8);

echo $squareShape->calculateArea();
echo "\r\n";
echo $rectangleShape->calculateArea();