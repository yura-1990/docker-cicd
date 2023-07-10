<?php

# OOP
// Properties, methods

class Visibility
{
    public string $name;
    protected float|int $salary;
    private float|int $money;

    public function accessAnywhere(): void
    {
        //
    }

    protected function accessWithInClassAndThisSubclasses(): void
    {
        //
    }

    private function accessOnlyWithInClassItself(): void
    {
        //
    }
    
}

$visibilities = new Visibility(); // $visibilities - object and object notation