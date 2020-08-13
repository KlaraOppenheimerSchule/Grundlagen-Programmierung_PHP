<?php

namespace TelefonaufgabeOCP\Telefone;

use TelefonaufgabeOCP\Akkus\IAkku;
use TelefonaufgabeOCP\Telefone\Mobiltelefon;

class MobilTelefonTouch extends MobilTelefon
{
    private $bildschirmDiagonale;

    public function __construct($bildschirmDiagonale, $anzahlTasten, IAkku $meinAkku, $lautstaerke)
    {
        $this->bildschirmDiagonale=$bildschirmDiagonale;
        parent::__construct($anzahlTasten, $meinAkku, $lautstaerke);
    }

    public function getbildschirmDiagonale() : float
    {
        return $this->bildschirmDiagonale;
    }
}

?>