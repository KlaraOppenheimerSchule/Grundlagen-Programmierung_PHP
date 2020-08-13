<?php

namespace Telefonaufgabe\Akkus;
use Akkus;

class Akku
{
    private $ladezustand;

    function __construct()
    {
        $this->ladezustand=100;
    }

    public function getLadezustand() : int
    {
        return $this->ladezustand;
    }

    public function laden() : bool
    {
        return true;
    }
}

?>