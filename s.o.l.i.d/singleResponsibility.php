<?php

# S.O.L.I.D
// Single Responsibility

interface Area
{
    public function areaCalculate(): int|float;
}

class Square implements Area
{
    public int|float $length;

    public function __construct(int|float $length)
    {
        $this->length = $length;
    }

    public function areaCalculate(): int|float
    {
        return pow($this->length, 2);
    }
}

class Circle implements Area
{
    public int|float $radius;

    public function __construct(int|float $radius)
    {
        $this->radius = $radius;
    }

    public function areaCalculate(): int|float
    {
        return pi() * pow($this->radius, 2);
    }
}

class AreaCalculate
{
    protected Area $shape;

    public function __construct(Area $shape)
    {
        $this->shape = $shape;
    }

    public function output(): int|float
    {
        return $this->shape->areaCalculate();
    }
}

class ConverterType
{
    protected array $allShapes;

    public function __construct(array|object $allShapes)
    {
        $this->allShapes = $allShapes;
    }

    public function HTML(): string
    {
        $list='';
        foreach ($this->allShapes as $shape){
            $list .= "<div>$shape</div>";
        }

        return $list;
    }

    public function JSON(): bool|string|array|object
    {
        return json_encode($this->allShapes);
    }
}

$square = new Square(200);
$circle = new Circle(200);

$areaSquare = new AreaCalculate($square);
$areaCircle = new AreaCalculate($circle);

$convertType = new ConverterType([$areaSquare->output(), $areaCircle->output()]);
echo $convertType->HTML();
echo "\r\n";
echo $convertType->JSON();

/* Only one task should be resolved */