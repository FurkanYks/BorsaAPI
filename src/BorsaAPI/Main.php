<?php

namespace BorsaAPI;

use BorsaAPI\Borsa;

class Main
{

    public const APIURL = "https://api.genelpara.com/embed/para-birimleri.json";

    public function getBorsaAPI()
    {
        $JSON = json_decode(file_get_contents(Main::APIURL), true);
        return $JSON;
    }
}