<?php

class Abschreibung_6_PB
{

    public function abschreibung(int $startvalue, int $time)
    {
        $valueyearly = $startvalue / $time;
        $rest   = $startvalue;
        for($i = 1; $i <= $time; $i ++)
        {
           $rest -= $valueyearly;

           echo "Abschreibungsjahr: " . $i . " Anfangswert: " . $startvalue . "€" . " Abschreibung: " . $valueyearly . "€" .  " Restbetrag: " . (int) $rest . "€" . "<br>";
        }
    }
}
$obj = new Abschreibung_6_PB();
$obj->abschreibung(100000, 17);