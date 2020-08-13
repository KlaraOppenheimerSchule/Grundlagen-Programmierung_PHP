<?php

class JSON_Handler
{ 
    public function loadRecipes() 
    {
        //Load Recipes from
        $recipesJson = file_get_contents('Models/recipes.json');
        $recipes = json_decode($recipesJson, true);
        
        require_once 'Models/Recipe.php';

        foreach ($recipes as $recipe)
        {
            $tempRecipe=new Recipe($recipe['id'], $recipe['name'], $recipe['zubereitungszeit'], $recipe['anweisung']);
            $recipeObjects[]=$tempRecipe;
        } 
        return $recipeObjects;
    }

    public function saveRecipe($recipes)
    {
        require_once 'Models/Recipe.php';
        $recipe=new Recipe(count($recipes), $_POST['name'], $_POST['zubereitungszeit'], $_POST['anweisung']);       
        return $recipe;
    }

    public function saveAllRecipes($recipes)
    {
        $recipesJson = json_encode($recipes);
        file_put_contents('Models/recipes.json', $recipesJson);
    }
}


