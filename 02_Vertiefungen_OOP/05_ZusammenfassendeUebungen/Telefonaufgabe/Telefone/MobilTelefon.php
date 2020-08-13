<?php

namespace Telefonaufgabe\Telefone;
use Akkus;

class MobilTelefon extends Telefon
{
    protected $anzahlTasten;
    protected $meinAkku;

    function __construct($anzahlTasten, $akku, $lautstaerke)
    {
        $this->anzahlTasten=$anzahlTasten;
        $this->meinAkku=$akku;
        parent::__construct($lautstaerke);
    }

    function getAnzahlTasten(): int
    {
        return $this->anzahlTasten;
    }

    public function getLadezustand() : int
    {
        return $this->meinAkku->getLadezustand();
    }
}

?>