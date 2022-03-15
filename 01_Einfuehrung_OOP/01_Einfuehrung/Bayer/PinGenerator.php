<?php

class PinGenerator
{
private array $pincollection = [];
private int $pinlength;
private int $pinamount;

    public function __construct($pinlength, $pinamount)
    {
        $this->pinlength = $pinlength;
        $this->pinamount = $pinamount;
    }
    public function getPinCollection(): array
    {
        return $this->checkPins();
    }
    public function generatePins(): string
    {
        $intpin = [];
            for($x = 0; $x <= $this->pinlength; $x++)
            {
                $intpin[$x] = rand(0, 9);
            }
        $stringpin = implode($intpin);
        var_dump($stringpin);
        return $stringpin;
    }
    public function checkPins(): array
    {
        $i = 0;
            while($i < $this->pinamount)
            {
                $stringpin = $this->generatePins();
                if(in_array($stringpin, $this->pincollection) == false)
                {
                    $this->pincollection[] = $stringpin;
                    $i++;
                }
            }
        return $this->pincollection;
    }
}
$obj = new PinGenerator(0, 8);
xdebug_var_dump($obj->getPinCollection());