<?php

namespace Telefonaufgabe\Telefone;

use Telefonaufgabe\Telefone\Mobiltelefon;

class MobilTelefonTouch extends MobilTelefon
{
    private $bildschirmDiagonale;

    public function __construct($bildschirmDiagonale, $anzahlTasten, $meinAkku, $lautstaerke)
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