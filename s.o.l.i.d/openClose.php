<?php
# solid
// open/close principle

interface Driver
{
    public function drive():string;
}

class BusDriver implements Driver
{
    public function drive(): string
    {
        return 'bus is being driven';
    }
}

class TrunkDriver implements Driver
{
    public function drive(): string
    {
        return 'trunk is being driven';
    }
}

class TestDriver
{
    private Driver $driver;
    public function __construct(Driver $driver)
    {
        $this->driver = $driver;
    }

    public function test(): string
    {
        return $this->driver->drive();
    }
}

$busDriver = new BusDriver();
$trunkDriver = new TrunkDriver();

$briver = new TestDriver($busDriver);
$triver = new TestDriver($trunkDriver);

echo $briver->test();
echo '\n';
echo $triver->test();

/* open to add close to modify */