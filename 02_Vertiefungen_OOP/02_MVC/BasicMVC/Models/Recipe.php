<?php

class Recipe
{   
    private $name;
    private $id;
    private $ingredient;


    public function __construct(string $name, int $id, string $ingredient)
    {
        $this->name=$name;
        $this->id=$id;
        $this->ingredient=$ingredient;
    }

    public function getName(): string
    {
        return $this->name;
    }   

    public function getId(): int
    {
        return $this->id;
    }   
    public function getIngredient(): string
    {
        return $this->ingredient;
    }   
}