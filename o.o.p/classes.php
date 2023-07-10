<?php
# OOP

// Classes and Objects

class Template
{
    public function __construct()
    {
        echo 'When this class is called, the constructor of this class works first';
    }

    public function call(): void
    {
        echo "\r\n";
        echo 'salom';
        echo "\r\n";
    }

    public function __destruct()
    {
        echo 'After all codes is executed, destruct of this class works';
    }
}

class Design extends Template
{

}

$design = new Design;
$design->call();