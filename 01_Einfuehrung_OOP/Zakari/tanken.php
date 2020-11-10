<?php

$liter = readline('Anzahl der getankten Liter: '); 

$prices = [1.067,1.202,1.5];
// $prices = [2,3,4]; 

echo "\n \n";
echo "1- Diesel     ====>  Preis: ".$prices[0]." \n";
echo "2- Super E10  ====>  Preis: ".$prices[1]." \n";
echo "3- Super E360 ====>  Preis: ".$prices[2]." \n";
echo "\n \n";
$sorte = readline('getankte Sorte auswählen: '); 

$price = 0;

switch($sorte){
    case "1": $price = $prices[0];
    break;
    case "2": $price = $prices[1];
    break;
    case "3": $price = $prices[2];
    break;
    default: echo "Tschüss"; die();
}


$result = $price * $liter;

if($liter>=100) $result = $result-$result*5/100;


echo "\n \n";
echo $liter." Liter kosten:".$result;
