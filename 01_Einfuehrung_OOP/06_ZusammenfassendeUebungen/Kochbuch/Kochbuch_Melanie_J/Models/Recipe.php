<?php

class Recipe
{   
    private $name;
    private $id;
    private $cookingTime;
    private $instruction;
    private $ingredients;
    private $stroveInstruction;
    private $ofenInstruction;


    public function __construct(string $name, int $id, string $cookingTime, string $instruction, string $ingredients, string $stroveInstruction, string $ofenInstruction)
    {
        $this->name=$name;
        $this->id=$id;
        $this->cookingTime=$cookingTime;
        $this->instruction=$instruction;
        $this->ingredients=$ingredients;
        $this->stroveInstruction=$stroveInstruction;
        $this->ofenInstruction=$ofenInstruction;
    }

    public function getName(): string
    {
        return $this->name;
    }   

    public function getId(): int
    {
        return $this->id;
    }
      public function getCookingTime(): string
    {
        return $this->cookingTime;
    }  
      public function getInstruction(): string
    {
        return $this->instruction;
    }  
      public function getIngredients(): string
    {
        return $this->ingredients;
    }  
      public function getStroveInstruction(): string
    {
        return $this->stroveInstruction;
    }  
      public function getOfenInstruction(): string
    {
        return $this->ofenInstruction;
    }  
}