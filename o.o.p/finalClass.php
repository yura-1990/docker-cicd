<?php
# OOP

// Final Class

// the purpose of this class is to prevent further modification and changing

final class FinalClass
{
    protected static string $final;
    public function __construct(string $final)
    {
        self::$final = $final;
    }

    public static function getFinal(): string
    {
        return self::$final;
    }

}

/*class getFinal extends FinalClass
{

}*/

$final = new FinalClass('Hello My Friend');
echo FinalClass::getFinal();