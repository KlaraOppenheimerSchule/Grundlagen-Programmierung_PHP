<?php

namespace KochRezept;

class AllRecipeProjection
{
    private $dbRecipe;

    public function __construct(DbRecipe $dbRecipe)
    {
        $this->dbRecipe = $dbRecipe;
    }

    public function getHtml()
    {
        $html = file_get_contents(__DIR__ . '/AllRecipe.html');
        $template = file_get_contents(__DIR__ . '/AllRecipeTablePart.html');
        $allRecipes = $this->dbRecipe->getAllRecipe();
        $htmlHolder = '';
        /**
         * @var $recipeObject Recipe
         */
        foreach ($allRecipes as $recipe)
        {
            $recipeId = $recipe['RecipeId'];
            $recipeObject = $recipe['RecipeObject'];
            $subHtmlBuilder = str_replace(array('%RECIPEID%', '%RECIPELINK%', '%RECIPENAME%'), array($recipeId, $recipeId, $recipeObject->getName()), $template);
            $htmlHolder .= $subHtmlBuilder;
        }
        return str_replace('%RECIPETABLE%', $htmlHolder, $html);
    }
}