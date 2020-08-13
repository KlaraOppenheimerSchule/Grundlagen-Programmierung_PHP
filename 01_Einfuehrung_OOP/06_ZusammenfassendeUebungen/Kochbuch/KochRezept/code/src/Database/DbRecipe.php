<?php


namespace KochRezept;

use PDO;

class DbRecipe
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllRecipe() : array
    {
        $statement = 'SELECT * FROM Recipes';
        $statement = $this->pdo->query($statement);
        $statement->execute();
        $recipeArray = [];
        foreach ($statement->fetchAll() as $row)
        {
            $ingredientArray = [];
            $jsonIngredient = json_decode($row['Ingredients'], true);
            foreach ($jsonIngredient as $ingredientItem) {
                $ingredientArray[] = Ingredient::fromParams(
                    $ingredientItem['IngredientName'],
                    $ingredientItem['IngredientHowMany'],
                    $ingredientItem['IngredientCaloriesForOne']
                );
            }
            $recipeArray[$row['RecipeId']]['RecipeId'] = $row['RecipeId'];
            $recipeArray[$row['RecipeId']]['RecipeObject'] = Recipe::fromParams(
                $row['RecipeName'],
                $row['Description'],
                $row['PrepareTime'],
                $ingredientArray
            );
        }
        return $recipeArray;
    }

    public function getSpecificRecipe(int $id) : Recipe
    {
        $statement = 'SELECT * FROM Recipes WHERE RecipeId = :RECIPEID';
        $statement = $this->pdo->prepare($statement);
        $statement->bindParam(':RECIPEID', $id);
        $statement->execute();
        $result = $statement->fetch();
        $ingredients = json_decode($result['Ingredients'], true);
        $ingredientsArray = [];
        foreach ($ingredients as $ingredient)
        $ingredientsArray[] = Ingredient::fromParams(
            $ingredient['IngredientName'],
            $ingredient['IngredientHowMany'],
            $ingredient['IngredientCaloriesForOne']
        );
        $recipe = Recipe::fromParams(
            $result['RecipeName'],
            $result['Description'],
            $result['PrepareTime'],
            $ingredientsArray
        );
        return $recipe;
    }

    public function insertRecipe(Recipe $recipe) : bool
    {
        $statement = 'INSERT INTO Recipes(RecipeName, Description, PrepareTime, Ingredients) VALUES(:RECIPENAME, :RECIPEDESCRIPTION, :RECIPEPREPARETIME, :RECIPEINGREDIENTS)';
        $statement = $this->pdo->prepare($statement);
        $statement->bindValue(':RECIPENAME', $recipe->getName());
        $statement->bindValue(':RECIPEDESCRIPTION', $recipe->getDescription());
        $statement->bindValue(':RECIPEPREPARETIME', $recipe->getPrepareTime());

        $json = [];
        /**
         * @var $ingredient Ingredient
         */
        foreach ($recipe->getIngredients() as $counter => $ingredient)
        {
            $json[$counter]['IngredientName'] = $ingredient->getName();
            $json[$counter]['IngredientHowMany'] = $ingredient->getHowMany();
            $json[$counter]['IngredientCaloriesForOne'] = $ingredient->getCaloriesForOne();
        }
        $statement->bindValue(':RECIPEINGREDIENTS', json_encode($json));
        return $statement->execute();
    }
}