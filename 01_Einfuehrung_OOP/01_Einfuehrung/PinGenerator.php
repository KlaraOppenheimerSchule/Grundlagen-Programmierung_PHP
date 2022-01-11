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
        return $this->printCheckPins();
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
    public function printCheckPins(): array
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
                elseif(in_array($stringpin, $this->pincollection) == true)
                {
                    continue;
                }
        }
        return $this->pincollection;
    }
}
$obj = new PinGenerator(10, 8);
xdebug_var_dump($obj->getPinCollection());