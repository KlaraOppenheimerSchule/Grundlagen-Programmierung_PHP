<?php

class  FizzBuzz
{


    public function buzzing()
    {

        for ($x = 1; $x <= 101; $x++) {

            if ($x % 15 == 0) {
                echo "FizzBuzz" . "</br>";
            } elseif ($x % 5 == 0) {
                echo "Buzz" . "</br>";
            } elseif ($x % 3 == 0) {
                echo "Fizz" . "</br>";
            } else {
                echo $x . "</br>";
            }


        }
    }

}

    $Aufgabe = new FizzBuzz();
    $Aufgabe->buzzing();











