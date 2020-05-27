<?php

namespace KochRezept;

use PDO;

Class Factory
{
    private $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function createApplication() : Application
    {
        return new Application(
            $this->getRouter()
        );
    }

    private function getRouter() : Router
    {
        return new Router(
            $this,
            $this->getServerWrapper());
    }

    public function getDBConnection() : PDO
    {
        return (
            new DbConnection(
                $this->config
            )
        )->getPdo();
    }

    private function getDbRecipe()
    {
        return new DbRecipe(
              $this->getDBConnection()
         );
    }

    private function getServerWrapper() : ServerWrapper
    {
        return new ServerWrapper();
    }

    public function getIndexPage() : IndexPage
    {
        return new IndexPage(
            new IndexProjection()
        );
    }

    public  function getAllRecipePage() : AllRecipePage
    {
        return new AllRecipePage(
            new AllRecipeProjection(
            $this->getDbRecipe()
            )
        );
    }

    public function getSpecificRecipePage() : SpecificRecipePage
    {
        return new SpecificRecipePage(
            new SpecificRecipeProjection(
                $this->getDbRecipe(),
                $this->getServerWrapper()
            )
        );
    }

    public function getInsertRecipePage() : InsertRecipePage
    {
        return new InsertRecipePage(
            new InsertRecipeProjection(),
            $this->getServerWrapper(),
            $this->getDbRecipe()
        );
    }
}