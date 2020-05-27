<?php

namespace KochRezept;

class InsertRecipePage implements Page
{
    private $projection;

    private $serverWrapper;

    private $dbRecipe;

    public function __construct(InsertRecipeProjection $projection, ServerWrapper $serverWrapper, DbRecipe $dbRecipe)
    {
        $this->projection = $projection;
        $this->serverWrapper = $serverWrapper;
        $this->dbRecipe = $dbRecipe;
    }


    public function run()
    {
        if ($this->serverWrapper->getRequest() === 'POST')
        {
            $recipeName = $this->serverWrapper->getPostValue('recipeName');
            $recipeDescription = $this->serverWrapper->getPostValue('recipeDescription');
            $recipePrepareTime = (int) $this->serverWrapper->getPostValue('recipePrepareTime');

            $countedIngredients = count($this->serverWrapper->getPostValue('ingredientsName'));
            $ingredientsArray = [];
            for ($x = 0; $x < $countedIngredients; $x++)
            {
                $ingredientsName = $this->serverWrapper->getPostValue('ingredientsName')[$x];
                $ingredientsHowMany = $this->serverWrapper->getPostValue('ingredientsHowMany')[$x];
                $ingredientsCalories = $this->serverWrapper->getPostValue('ingredientsCalories')[$x];
                $ingredientsArray[] = Ingredient::fromParams($ingredientsName, $ingredientsHowMany, $ingredientsCalories);
            }
            $recipe = Recipe::fromParams(
                    $recipeName,
                    $recipeDescription,
                    $recipePrepareTime,
                    $ingredientsArray
            );
            $this->dbRecipe->insertRecipe($recipe);
            return $this->projection->getHtml();
        }
        return $this->projection->getHtml();
    }
}