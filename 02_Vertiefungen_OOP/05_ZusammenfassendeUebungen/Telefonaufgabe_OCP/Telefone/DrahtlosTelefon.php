<?php

namespace TelefonaufgabeOCP\Telefone;
use TelefonaufgabeOCP\Akkus\IAkku;

class DrahtlosTelefon extends StationaeresTelefon
{
    private $reichweite;
    private $meinAkku;

    public function __construct($reichweite, $anzahlTasten, IAkku $meinAkku, $lautstaerke)
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