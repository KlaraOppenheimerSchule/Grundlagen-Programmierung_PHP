<?php


namespace KochRezept;

use InvalidArgumentException;

class Recipe
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $prepareTime;

    /**
     * @var string
     */
    private $description;

    /**
     * @var array
     */
    private $ingredients;

    public function __construct(string $name, string $description, int $prepareTime, array $ingredients)
    {
        $this->validateValues($name, $description, $prepareTime, $ingredients);
        $this->name = $name;
        $this->prepareTime = $prepareTime;
        $this->description = $description;
        $this->ingredients = $ingredients;
    }


    public static function fromParams(string $name, string $description, int $prepareTime, array $ingredients) : Recipe
    {
        return new Recipe($name, $description, $prepareTime,  $ingredients);
    }

    private function validateValues(string $name, string $description, int $prepareTime, array $ingredients) : void
    {
        if (!is_string($name) || empty($name))
        {
            throw new InvalidArgumentException('Prepare Time is wrong!');
        }
        if (!is_int($prepareTime) || empty($prepareTime) || !preg_match('/^[\d]+$/m', $prepareTime))
        {
            throw new InvalidArgumentException('Prepare Time is wrong!');
        }
        if (!is_string($description) || empty($description))
        {
            throw new InvalidArgumentException('description empty or not string!');
        }
        if (!is_array($ingredients))
        {
            foreach ($ingredients as $ingredient)
            {
                if ($ingredient !== Ingredient::class){
                    throw new InvalidArgumentException('Not Ingredient Class in Ingredient Parameter!');
                }
            }
            throw new InvalidArgumentException('Not Ingredient Class in Ingredient Parameter!');
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
     * @return string
     */
    public function getPrepareTime(): string
    {
        return $this->prepareTime;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return array
     */
    public function getIngredients(): array
    {
        return $this->ingredients;
    }
}