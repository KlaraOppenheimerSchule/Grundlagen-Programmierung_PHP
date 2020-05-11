<?php

namespace Telefonaufgabe\Telefone;

class OeffentlichesTelefon extends StationaeresTelefon
{
    private $kosten;

    public function __construct($kosten, $standort, $lautstaerke)
    {
        $this->kosten=$kosten;
        parent::__construct($standort, $lautstaerke);
    }

    public function getKosten(): int
    {
        return $this->kosten;
    }
}

?>