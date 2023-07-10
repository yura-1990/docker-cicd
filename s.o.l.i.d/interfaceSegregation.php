<?php

# S.O.L.I.D

// Interface Segregation Principle - Clients should not be forced to depend on interfaces they do not use.

interface Printable
{
    public function print();
}

interface Scannable
{
    public function scan();
}

interface Faxable
{
    public function fax();
}

class Printer implements Printable
{
    public function print(): string
    {
        return 'printing something ...';
    }
}

class Scanner implements Scannable
{
    public function scan(): string
    {
        return 'scanning something ...';
    }
}

class FaxMachine implements Printable, Faxable
{
    public function print(): string
    {
        return 'printing something ...';
    }

    public function fax(): string
    {
        return 'faxing something ...';
    }
}

class SwitchTools
{
    protected $toolType;

    public function __construct($toolType)
    {
        $this->toolType = $toolType;
    }

    public function getType()
    {
        return $this->toolType;
    }
}

$print = new Printer();
$scanner = new Scanner();
$faxMachine = new FaxMachine();

$switchTool = new SwitchTools($faxMachine);
echo $switchTool->getType()->fax();

/* Separate interfaces to avoid fat, unused properties */