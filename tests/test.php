<?php

interface CountDuplication
{
    public function counting();
}

class ConvertStringToArray implements CountDuplication
{
    protected string $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function counting(): array
    {
        $array = $this->stringToArray();
        $counts = [];

        foreach ($array as $element) {
            if (isset($counts[$element])) {
                $counts[$element]++;
            } else {
                $counts[$element] = 1;
            }
        }
        return $counts;
    }

    public function stringToArray(): array
    {
        return preg_split('/\s+/', $this->string, -1, PREG_SPLIT_NO_EMPTY);
    }
}

class ArrayDoubleValue implements CountDuplication
{
    protected array $array;

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function counting(): array
    {
        $counts = [];
        $array = $this->array;

        foreach ($array as $element) {
            if (isset($counts[$element])) {
                $counts[$element]++;
            } else {
                $counts[$element] = 1;
            }
        }
        return $counts;
    }
}

class AppCountService
{
    protected CountDuplication $countDuplication;

    public function __construct(CountDuplication $countDuplication)
    {
        $this->countDuplication = $countDuplication;
    }

    public function showResult()
    {
        return $this->countDuplication->counting();
    }
}

$str = 'apple banana orange apple';
$arr = ['apple', 'banana', 'orange', 'apple'];

$string = new ConvertStringToArray($str);
$array = new ArrayDoubleValue($arr);

$strAppService = new AppCountService($string);
$arrAppService = new AppCountService($array);

/* <-<-<-<-< SHOW IN HTML OR API >->->->->-> */

class ShowApp
{
    protected array $array;

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function html(): void
    {
        $html = "<ul>";
        foreach ($this->array as $element => $count) {
            echo "<li>$element: $count</li>";
        }
        $html .= "</ul>";

        echo $html;
    }

    public function api(): void
    {
        var_dump(json_decode(json_encode($this->array)));
    }
}

$showApp = new ShowApp($strAppService->showResult());
$showApp->html();
$showApp->api();




