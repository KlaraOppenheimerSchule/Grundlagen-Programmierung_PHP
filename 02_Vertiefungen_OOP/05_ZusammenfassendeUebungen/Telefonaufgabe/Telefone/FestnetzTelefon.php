<?php

namespace Telefonaufgabe\Telefone;

abstract class FestnetzTelefon extends Telefon
{
    protected $standort;

    public function __construct($standort, $lautstaerke)
    {
        $this->standort=$standort;
        parent::__construct($lautstaerke);
    }

    public function getstandort(): string
    {
        return $this->standort;
    }

}

?>