<?php

namespace BorsaAPI;

use BorsaAPI\Main;

class Borsa
{
    public function getUnit(string $currency, string $value)
    {
        $API = (new Main)->getBorsaAPI();
        return $API["$currency"]["$value"];
    }
}