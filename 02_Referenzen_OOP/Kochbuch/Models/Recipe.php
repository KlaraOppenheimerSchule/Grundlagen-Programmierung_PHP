<?php

class Recipe
{   
    private $name;
    private $id;

    //Welche Schritte wären nun notwendig, um auch Zutaten verfügbar zu machen?

    public function __construct(string $name, int $id)
    {
        $this->name=$name;
        $this->id=$id;
        
    }

    public function getName(): string
    {
        return $this->name;
    }   

    public function getId(): int
    {
        return $this->id;
    }   
}