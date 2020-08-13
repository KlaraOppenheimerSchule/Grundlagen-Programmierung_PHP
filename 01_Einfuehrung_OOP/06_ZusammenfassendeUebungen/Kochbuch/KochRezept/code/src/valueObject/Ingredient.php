<?php

namespace KochRezept;

use RuntimeException;

class Ingredient
{
    private $name;

    private $howMany;

    private $caloriesForOne;

    private $sumOfCalories;

    public function __construct(string $name, int $howMany, int $caloriesForOne)
    {
        $this->validateParams($name, $howMany, $caloriesForOne);
        $this->name = $name;
        $this->howMany = $howMany;
        $this->caloriesForOne = $caloriesForOne;
        $this->sumOfCalories = $this->howMany * $this->caloriesForOne;
    }

    public static function fromParams(string $name, int $howMany, int $caloriesForOne) : Ingredient
    {
        return new Ingredient($name, $howMany, $caloriesForOne);
    }

    private function validateParams(string $name, int $howMany, int $caloriesForOne): void
    {
        if (!is_string($name) || !is_int($howMany) || !is_int($caloriesForOne))
        {
            throw new RuntimeException('Error in Ingredients::Class - Wrong Parameters');
        }
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getHowMany(): float
    {
        return $this->howMany;
    }

    /**
     * @return float
     */
    public function getCaloriesForOne(): float
    {
        return $this->caloriesForOne;
    }

    /**
     * @return float|int
     */
    public function getSumOfCalories()
    {
        return $this->sumOfCalories;
    }
}