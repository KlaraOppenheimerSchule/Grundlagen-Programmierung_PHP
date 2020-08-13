<?php

namespace Fahrtenbuch\BL;

use Fahrtenbuch\BL\Fahrzeug;

class Kleintransporter extends Fahrzeug
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