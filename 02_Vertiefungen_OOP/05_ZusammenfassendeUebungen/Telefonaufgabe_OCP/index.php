<?php
use TelefonaufgabeOCP\Telefone\MobilTelefon;
use TelefonaufgabeOCP\Telefone\MobilTelefonTouch;
use TelefonaufgabeOCP\Telefone\DrahtlosTelefon;
use TelefonaufgabeOCP\Akkus\NickelKadmiumAkku;
use TelefonaufgabeOCP\Akkus\NickelMetallhydridAkku;
use TelefonaufgabeOCP\Akkus\LithiumIonAkku;
use TelefonaufgabeOCP\Akkus\NeuerAkkutyp;


require_once 'Telefone\MobilTelefon.php';
require_once 'Akkus\Akku.php';


function __autoload($classname) {
    $lastSlash = strpos($classname, '\\') + 1;
    $classname = substr($classname, $lastSlash);
    $directory = str_replace('\\', '/', $classname);
    $filename = __DIR__ .'/' . $directory . '.php';
    require_once($filename);
}

$neuerAkku1 = new NickelKadmiumAkku();
$neuerAkku2 = new NickelMetallhydridAkku();
$neuerAkku3 = new LithiumIonAkku();
$neuerAkku4 = new NeuerAkkutyp();

$meinMobilTelefon = new MobilTelefon(10,$neuerAkku1, 5);

echo "Mobiltelefon: " . "</br>";
echo "Anzahl Tasten: " . $meinMobilTelefon->getAnzahlTasten() ."</br>";
echo "Ladezustand: " . $meinMobilTelefon->getLadezustand() ."</br>";
echo "Lautstärke: " . $meinMobilTelefon->getLautstaerke() ."</br>";
echo "--------------- " . "</br>";

//Funktioniert nicht, da kein Akku vom Typ IAkku übergeben wird.
#$meinMobilTelefon = new MobilTelefon(10,"Test", 5);

$meinMobilTelefonTouch = new MobilTelefonTouch(10.3, 1, $neuerAkku2, 4);

echo "MobiltelefonTouch: " . "</br>";
echo "Anzahl Tasten: " . $meinMobilTelefonTouch->getAnzahlTasten() ."</br>";
echo "Ladezustand: " . $meinMobilTelefonTouch->getLadezustand() ."</br>";
echo "Lautstärke: " . $meinMobilTelefonTouch->getLautstaerke() . "</br>";
echo "Bildschirmdiagonale: " . $meinMobilTelefonTouch->getbildschirmDiagonale() . "</br>";
echo "--------------- " . "</br>";

$meinDrahtlosTelefon = new DrahtlosTelefon(50, 20, new NeuerAkkutyp(), 2);

echo "Drahtlostelefon: " . "</br>";
echo "Ladezustand: " . $meinDrahtlosTelefon->getLadezustand() ."</br>";
echo "Lautstärke: " . $meinDrahtlosTelefon->getLautstaerke() . "</br>";
echo "Reichweite: " . $meinDrahtlosTelefon->getReichweite() . "</br>";