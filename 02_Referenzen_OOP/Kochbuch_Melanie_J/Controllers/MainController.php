<?php

class MainController
{
    private $recipes=array();
    
    public function __construct() 
    {
        require_once 'Models/Recipe.php';
        $rezept1=new Recipe("Himbeertorte", 0, "Zubereitungszeit: 120 Minuten", "Anweisung: Mehl und Zucker vermischen", "Zutaten: Mehl: 300g, Zucker: 50g", "Herdangabe: -", "Ofenangabe: 200 Grad, 60 Minuten");
        $rezept2=new Recipe("Walnussbrot", 1, "Zubereitungszeit: 200 Minuten", "Anweisung: Teig kneten", "Zutaten: Walnüsse: 150g, Zucker: 30g", "Herdangabe: -", "Ofenangabe: 180 Grad, 90 Minuten");
        $rezept3=new Recipe("Currywurst", 2, "Zubereitungszeit: 30 Minuten", "Anweisung: Wurst in kleine Stücke schneiden", "Zutaten: Würstchen: 300g, Curry: 2 TL", "Herdangabe: 5 Min anbraten", "Ofenangabe: -");
     
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
        //Not a nice solution, because the index of the array could change
        $recipe=$this->recipes[$id];
        
        //Call a spezific view to render this data in html
        require 'Views/RecipeView.php';
    }

}