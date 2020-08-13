<?php

namespace Telefonaufgabe\Telefone;

class StationaeresTelefon extends Festnetztelefon
{
    public function __construct($standort, $lautstaerke)
    {
        parent::__construct($standort, $lautstaerke);
    }

}

?>