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

    public function generatePins(): string
    {
        $intpin = [];
            for($x = 0; $x <= $this->pinlength; $x++)
            {
                $intpin[$x] = rand(1, 9);
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
$pls = new PinGenerator(1, 4);
xdebug_var_dump($pls->printCheckPins());