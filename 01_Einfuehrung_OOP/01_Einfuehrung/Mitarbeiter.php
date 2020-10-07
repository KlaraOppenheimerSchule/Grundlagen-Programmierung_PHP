<?php

class Mitarbeiter{

    private $vorname;
    private $nachname;

    public function __construct($vorname,$nachname){
        $this->vorname = $vorname;
        $this->nachname = $nachname;
    }

    public function getVorname(){
        return $this->vorname;
    }

    public function setVorname(){
        $this->vorname = $vorname;
    }

    public function getNachname(){
        return $this->nachname;
    }

    public function setNachname(){
        $this->nachname = $nachname;
    }
}

$vorname = readline('vorname eingeben: ');
$nachname = readline('Nachname eingeben: ');

$mitarbeiter = new Mitarbeiter($vorname,$nachname);


echo $mitarbeiter->getVorname()." ";
print $mitarbeiter->getNachname();
 