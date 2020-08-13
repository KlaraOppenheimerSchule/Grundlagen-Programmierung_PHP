<?php

namespace TelefonaufgabeOCP\Telefone;

abstract class Telefon
{
    protected $lautstaerke;

    function __construct($lautstaerke)
    {
        $this->lautstaerke=$lautstaerke;
    }

    function getLautstaerke(): int
    {
        return $this->lautstaerke;
    }
}

?>