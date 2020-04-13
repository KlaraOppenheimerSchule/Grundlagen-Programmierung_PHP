<?php
    
    class Verschluesselungsmaschine 
    {
        
        function textVerschluesslen(string $text, int $verschluesselungswert): string
        {
            //Alle Buchstaben im String groß machen
            $buchstabenText=strtoupper($text);

            //Konvertiert einen String in ein Array
            $buchstabenText=str_split($buchstabenText);
            $verschluesselterText=array();    

            foreach($buchstabenText as $key=>$value)
            { 
                //Zahl aus ASCII-Tabelle ableiten mit der Funktion ord
                $alterWert=ord($value);
                $neuerWert=$alterWert+$verschluesselungswert;

                if($alterWert >64 && $alterWert <91)
                {        
                    if($neuerWert > 90)
                    {
                        //Berechne den Überhang über 90 und addiere, ihn zu 65
                        $ueberhang=$neuerWert-90;
                        $neuerWert=65+$ueberhang;
                        
                        //Buchstaben basierend auf den neuen Wert aus der ASCII-Tabelle ableiten
                        $neuerBuchstabe=chr($neuerWert);
                        $buchstabenText[$key]=$neuerBuchstabe;   
                    }
                    else
                    {
                        $neuerBuchstabe=chr($neuerWert);
                        $buchstabenText[$key]=$neuerBuchstabe;      
                    }
                }
            }

            //Array in String konvertieren
            $verschluesselterText = implode("", $buchstabenText);
            return $verschluesselterText;
        }

        function textEntschluesslen(string $text, int $entschluesselungswert): string
        {
            //Alle Buchstaben im String groß machen
            $buchstabenText=strtoupper($text);

            //Konvertiert einen String in ein Array
            $buchstabenText=str_split($buchstabenText);
            $verschluesselterText=array();    

            foreach($buchstabenText as $key=>$value)
            { 
                //Zahl aus ASCII-Tabelle ableiten mit der Funktion ord
                $alterWert=ord($value);
                $neuerWert=$alterWert-$entschluesselungswert;

                if($alterWert >64 && $alterWert <91)
                {
                    if($neuerWert < 65)
                    {
                        //Berechne den Überhang über 90 und addiere, ihn zu 65
                        $unterhang=90-$neuerWert;
                        $neuerWert=90-$unterhang;
                        
                        //Buchstaben basierend auf den neuen Wert aus der ASCII-Tabelle ableiten
                        $neuerBuchstabe=chr($neuerWert);
                        $buchstabenText[$key]=$neuerBuchstabe;   
                    }
                    else
                    {
                        $neuerBuchstabe=chr($neuerWert);
                        $buchstabenText[$key]=$neuerBuchstabe;      
                    }
                }
            }

            //Array in String konvertieren
            $entschluesselterText = implode("", $buchstabenText);
            return $entschluesselterText;
        }

    }