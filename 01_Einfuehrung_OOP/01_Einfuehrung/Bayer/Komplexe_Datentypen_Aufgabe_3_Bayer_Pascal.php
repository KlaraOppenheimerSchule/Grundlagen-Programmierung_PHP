<?php

class Arrayflip
{
private array $originalarray = [];
private array $flippedarray = [];

public function generateOrigin()
{
    for($x = 0; $x <= 9; $x++)
    {
        $this->originalarray[$x] = $x;
    }

}
public function flipArray()
{
    $this->generateOrigin();
    $this->flippedarray = array_reverse($this->originalarray);
    var_dump($this->originalarray);
    var_dump($this->flippedarray);
}
}
$obj = new Arrayflip();
$obj->flipArray();