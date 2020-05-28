<?php


namespace KochRezept;

class SpecificRecipeProjection
{
    private $dbRecipe;

    private $serverWrapper;

    public function __construct(DbRecipe $dbRecipe, ServerWrapper $serverWrapper)
    {
        $this->dbRecipe = $dbRecipe;
        $this->serverWrapper = $serverWrapper;
    }

    public function getHtml() : string
    {
        $recipeId = $this->serverWrapper->getGetValue('id');
        $template = file_get_contents(__DIR__ . '/specificRecipe.html');
        $subTemplate = file_get_contents(__DIR__ . '/specificRecipePart.html');
        $recipe = $this->dbRecipe->getSpecificRecipe($recipeId);

        $subTemplatePlaceholer = '';
        /**
         * @var $ingredient Ingredient
         */
        foreach ($recipe->getIngredients() as $ingredient)
        {
            $subTemplate = str_replace(
                ['%INGREDIENTSNAME%', '%INGREDIENSHOWMANY%', '%INGREDIENSCALORIEFORONE%', '%INGREDIENSCALORIESUMM%'],
                [$ingredient->getName(), $ingredient->getHowMany(), $ingredient->getCaloriesForOne(), $ingredient->getSumOfCalories()],
                $subTemplate
            );
            $subTemplatePlaceholer .= $subTemplate;
        }

        $template = str_replace(
            array('%RECIPEID%', '%RECIPENAME%', '%RECIPEDESCRIPTION%', '%RECIPEPREPARETIME%', '%RECIPEINGREDIENTS%'),
            array($recipeId, $recipe->getName(), $recipe->getDescription(), $recipe->getPrepareTime(), $subTemplatePlaceholer),
            $template);

        return $template;
    }
}