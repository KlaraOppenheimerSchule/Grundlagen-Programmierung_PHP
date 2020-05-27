Create DATABASE IF NOT EXISTS KochRezept;
CREATE TABLE IF NOT EXISTS KochRezept.Recipes (
RecipeId INT auto_increment NOT NULL,
RecipeName varchar(128) NOT NULL,
Description TEXT NULL,
PrepareTime INT NULL,
Ingredients TEXT NOT NULL,
CONSTRAINT Recipes_PK PRIMARY KEY (RecipeId)
)
ENGINE=InnoDB
DEFAULT CHARSET=latin1
COLLATE=latin1_swedish_ci;