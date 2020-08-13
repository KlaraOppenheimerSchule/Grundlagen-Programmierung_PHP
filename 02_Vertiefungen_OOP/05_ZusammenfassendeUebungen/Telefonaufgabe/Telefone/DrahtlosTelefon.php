<?php

namespace Telefonaufgabe\Telefone;
use Telefonaufgabe\Akkus\Akku;

class DrahtlosTelefon extends StationaeresTelefon
{
    private $reichweite;
    private $meinAkku;

    public function __construct($reichweite, $anzahlTasten, Akku $meinAkku, $lautstaerke)
    {
        $this->reichweite=$reichweite;
        $this->meinAkku=$meinAkku;
        parent::__construct($anzahlTasten, $lautstaerke);
    }

    public function getReichweite() : int
    {
        return $this->reichweite;
    }

    public function getLadezustand() : int
    {
        return $this->meinAkku->getLadezustand();
    }
}

?>