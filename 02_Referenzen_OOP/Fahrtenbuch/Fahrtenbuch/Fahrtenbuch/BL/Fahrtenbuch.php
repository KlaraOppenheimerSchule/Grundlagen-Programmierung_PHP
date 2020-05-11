<?php

namespace Fahrtenbuch\BL;
use Fahrtenbuch\BL\Fahrt;

class Fahrtenbuch
{
    private $fahrten;
    private $umsatz;

    public function __construct()
    {
        $this->fahrten = array();
        $this->umsatz = 0;
    }

    public function setFahrten(Fahrt $fahrt)
    {
        $this->fahrten[] = $fahrt;
    }

    public function getUmsatz() : float
    {
        foreach($this->fahrten as $fahrt)
        {
            $this->umsatz += $fahrt->getPreis();
        }

        return $this->umsatz;
    }
}