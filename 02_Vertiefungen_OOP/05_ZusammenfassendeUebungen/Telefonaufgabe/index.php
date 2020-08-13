<?php
use Telefonaufgabe\Telefone\MobilTelefon;
use Telefonaufgabe\Telefone\MobilTelefonTouch;
use Telefonaufgabe\Telefone\DrahtlosTelefon;
use Telefonaufgabe\Akkus\Akku;


function __autoload($classname) {
    $lastSlash = strpos($classname, '\\') + 1;
    $classname = substr($classname, $lastSlash);
    $directory = str_replace('\\', '/', $classname);
    $filename = __DIR__ .'/' . $directory . '.php';
    require_once($filename);
}

$neuerAkku1 = new Akku();
$neuerAkku2 = new Akku();
$neuerAkku3 = new Akku();

$meinMobilTelefon = new MobilTelefon(10,$neuerAkku1, 5);

echo "Mobiltelefon: " . "</br>";
echo "Anzahl Tasten: " . $meinMobilTelefon->getAnzahlTasten() ."</br>";
echo "Ladezustand: " . $meinMobilTelefon->getLadezustand() ."</br>";
echo "Lautstärke: " . $meinMobilTelefon->getLautstaerke() ."</br>";
echo "--------------- " . "</br>";


$meinMobilTelefonTouch = new MobilTelefonTouch(10.3, 1, $neuerAkku2, 4);

echo "MobiltelefonTouch: " . "</br>";
echo "Anzahl Tasten: " . $meinMobilTelefonTouch->getAnzahlTasten() ."</br>";
echo "Ladezustand: " . $meinMobilTelefonTouch->getLadezustand() ."</br>";
echo "Lautstärke: " . $meinMobilTelefonTouch->getLautstaerke() . "</br>";
echo "Bildschirmdiagonale: " . $meinMobilTelefonTouch->getbildschirmDiagonale() . "</br>";
echo "--------------- " . "</br>";


$meinDrahtlosTelefon = new DrahtlosTelefon(50, 20, $neuerAkku3, 2);

echo "Drahtlostelefon: " . "</br>";
echo "Ladezustand: " . $meinDrahtlosTelefon->getLadezustand() ."</br>";
echo "Lautstärke: " . $meinDrahtlosTelefon->getLautstaerke() . "</br>";
echo "Reichweite: " . $meinDrahtlosTelefon->getReichweite() . "</br>";