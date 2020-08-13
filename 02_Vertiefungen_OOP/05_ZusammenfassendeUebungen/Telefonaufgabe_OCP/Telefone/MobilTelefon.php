<?php

namespace TelefonaufgabeOCP\Telefone;
use TelefonaufgabeOCP\Akkus\IAkku;

//Nicht notwendig, da die Klasse über autoloader-Methode eingebunden wird
//require_once 'Telefon.php';

class MobilTelefon extends Telefon
{
    protected $anzahlTasten;
    protected $meinAkku;

    public function __construct($anzahlTasten, IAkku $akku, $lautstaerke)
    {
        $this->anzahlTasten=$anzahlTasten;
        $this->meinAkku=$akku;
        parent::__construct($lautstaerke);
    }

    public function getAnzahlTasten(): int
    {
        return $this->anzahlTasten;
    }

    public function getLadezustand() : int
    {
        return $this->meinAkku->getLadezustand();
    }
}

?>