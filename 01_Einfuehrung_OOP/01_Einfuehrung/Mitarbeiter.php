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

    public function setVorname($vorname){
        $this->vorname = $vorname;
    }

    public function getNachname(){
        return $this->nachname;
    }

    public function setNachname($nachname){
        $this->nachname = $nachname;
    }
}

$vorname = readline('Vorname eingeben: ');
$nachname = readline('Nachname eingeben: ');

$mitarbeiter = new Mitarbeiter($vorname,$nachname);


echo $mitarbeiter->getVorname()." ";
print $mitarbeiter->getNachname();

echo("\n \n");

$nachname = readline('Nachname ändern: ');

$mitarbeiter->setNachname($nachname);


echo $mitarbeiter->getVorname()." ";
echo $mitarbeiter->getNachname();



 