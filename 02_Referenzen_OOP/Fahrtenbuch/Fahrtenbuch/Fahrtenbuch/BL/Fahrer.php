<?php

namespace Fahrtenbuch\BL;

class Fahrer
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name; 
    }
}