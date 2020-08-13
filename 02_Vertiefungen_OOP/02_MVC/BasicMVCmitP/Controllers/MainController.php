<?php

class MainController
{
    private $jsonhandler;
    private $recipes;

    public function __construct() 
    {
        require_once 'Models/JSON_handler.php';
        $this->jsonhandler=new JSON_handler();
        $this->recipes=$this->jsonhandler->loadRecipes();
    }

    public function getAll()
    {
        require 'Views/TotalView.php';
    }   

    public function getRecipe(int $id)
    { 
        //Find the searched recipe
        //Not a nice soluation, because the index of the array could change
        $recipe=$this->recipes[$id];
        
        //Call a spezific view to render this data in html
        require 'Views/RecipeView.php';
    }

    public function createRecipe()
    {
        require 'Views/CreateRecipeView.php';
    }

    public function saveRecipe()
    {
        //Create recipe
        array_push($this->recipes, $this->jsonhandler->saveRecipe($this->recipes));

        //Save all recipes
        $this->jsonhandler->saveAllRecipes($this->recipes);
        
        require 'Views/CreateRecipeResult.php';
    }
}