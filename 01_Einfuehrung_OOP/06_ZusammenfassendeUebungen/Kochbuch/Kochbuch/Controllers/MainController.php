<?php

class MainController
{
    private $recipes=array();
    
    public function __construct() 
    {
        require_once 'Models/Recipe.php';
        $rezept1=new Recipe("Himbeertorte", 0);
        $rezept2=new Recipe("Walnussbrot", 1);
        $rezept3=new Recipe("Veggi Currywurst", 2);
     
        $this->recipes[]=$rezept1;
        $this->recipes[]=$rezept2;
        $this->recipes[]=$rezept3;
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

}