<?php
# OOP
// Static methods and properties

class BelongToItself
{
    public static string $something;

    public function __construct(string $something = 'Salom')
    {
        self::$something = $something;
    }

    public static function getSomething(): void
    {
        echo self::$something;
    }
}

class GetSomething extends BelongToItself
{
    public function __construct(string $something)
    {
        parent::__construct($something);
    }
}


new GetSomething('Salut');

GetSomething::getSomething();