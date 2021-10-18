<?php

 class UeberladeneMethoden
    {
        private $Zahl1;
        private $Zahl2;
        private $Zahl3;

        public function __construct($Zahl1, $Zahl2, $Zahl3)
        {
            $this->Zahl1 = $Zahl1;
            $this->Zahl2 = $Zahl2;
            $this->Zahl3 = $Zahl3;
        }

        public function Addition($eins, $zwei)
        {

            return $eins + $zwei;

        }

        public function Addition($vier, $fuenf, $drei)
        {

            return $vier + $fuenf + $drei;

        }


 }








