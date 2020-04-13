<?php

/* Definition der Klasse Mitarbeiter */
    class Mitarbeiter
    {
        private $vorname;     /* Eigenschaft */
        private $nachname;
        
        /* Definition des Konstruktors der Klasse Mitarbeiter */
        function __construct($vorname, $nachname)
        {
            $this->vorname = $vorname;
            $this->nachname = $nachname;
        }

        function getVorname()     /* Methode */
        {
            echo "Mein Vorname ist: $this->vorname <br />";
        }

        function getNachname()     /* Methode */
        {
            echo "Mein Nachname ist: $this->nachname <br />";
        }
    }