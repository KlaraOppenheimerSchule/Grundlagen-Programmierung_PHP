<?php

namespace Fahrtenbuch\BL;
use Fahrtenbuch\BL\Kosten;
use Fahrtenbuch\BL\Fahrer;

class Fahrt
{
    private $fahrtkosten;
    private $kilometer;
    private $fahrer;

    public function __construct(Fahrer $fahrer, int $km, Kosten $kosten)
    {
        $this->fahrer = $fahrer;
        $this->fahrtkosten = $kosten;
        $this->kilometer = $km;
    }

    public function getPreis(): float
    {
        return $this->kilometer * $this->fahrtkosten->getPreis();
    }
}