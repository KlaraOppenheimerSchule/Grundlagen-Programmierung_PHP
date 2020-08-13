<?php

namespace Fahrtenbuch\BL;

use Fahrtenbuch\BL\Kosten;

abstract class Fahrzeug implements Kosten 
{
    protected $kilometerSatz;

    public function __construct(float $kilometerSatz) 
    {
        $this->kilometerSatz = $kilometerSatz;
    }

    public function getPreis(): float
    {
        return $this->kilometerSatz;
    } 
}