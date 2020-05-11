<?php

namespace TelefonaufgabeOCP\Akkus;
#require_once 'Akkus\IAkku.php';

class NickelMetallhydridAkku implements IAkku
{
    private $ladezustand;

    function __construct()
    {
        $this->ladezustand=100;
    }
    
    public function getLadezustand() : int
    {
        return $this->ladezustand;
    }
    
    public function laden() : bool
    {
        return true;
    }
}

?>