<?php

namespace Fahrtenbuch\BL;

use Fahrtenbuch\BL\Fahrzeug;

class Motorroller extends Fahrzeug
{
    public function __construct(float $kilometerSatz)
    {
        parent::__construct($kilometerSatz);     
    }

    public function getPreis(): float
    {
        return $this->kilometerSatz;
    }
}