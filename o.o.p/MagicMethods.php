<?php

class MagicMethods
{
    /*protected float $amount;*/
    protected array $arr;

    /*public function __construct(float $amount)
    {
        $this->amount = $amount . ' ';
    }*/

    /*
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        echo 'invoke is created';
    }

    public function __toString(): string
    {
        // TODO: Implement __toString() method.
        return ' String is created';
    }*/

   /*public function __get(string $name)
    {
        if (property_exists($this, $name)){
            return $this->$name;
        }

        return 'There is not this kind of property in this class';
    }

    public function __set(string $name, $value): void
    {
        if (property_exists($this, $name)){
            $this->$name = $value;
        }

    }*/

    public function __get(string $name) // when showing a value outside the class
    {
        if (array_key_exists($name, $this->arr)){
            return $this->arr[$name];
        }

        return 'There is not the property';
    }

    public function __set(string $name, $value): void
    {
        $this->arr[$name] = $value;  // when giving a value outside the class
    }

}

$magic = new MagicMethods();

$magic->arr = [35]; //giving outside

var_dump($magic->arr); // showing outside