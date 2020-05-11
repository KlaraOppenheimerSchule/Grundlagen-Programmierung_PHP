<?php

namespace Fahrtenbuch\BL;

use Fahrtenbuch\BL\Fahrzeug;

class Fahrrad extends Fahrzeug
{
    public function __construct(float $kilometerSatz)
    {
        parent::__construct($kilometerSatz);     
    }
}