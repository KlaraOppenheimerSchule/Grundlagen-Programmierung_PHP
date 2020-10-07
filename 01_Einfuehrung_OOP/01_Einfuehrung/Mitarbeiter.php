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

$mitarbeiter = new Mitarbeiter('John','Doe');

print $mitarbeiter->getNachname();