<?php

 class UeberladeneMethoden
    {





        public function Addition($eins, $zwei)
        {

            return $eins + $zwei;

        }

        public function Addition($vier, $fuenf, $drei)
        {

            return $vier + $fuenf + $drei;

        }


 }

    $test = new UeberladeneMethoden();
    echo $test->Addition(2, 4);






