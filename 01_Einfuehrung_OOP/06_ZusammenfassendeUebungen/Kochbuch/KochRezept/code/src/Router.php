<?php


namespace KochRezept;

class Router
{
    private $factory;

    private $serverWrapper;

    public function __construct(Factory $factory, ServerWrapper $serverWrapper)
    {
        $this->factory = $factory;
        $this->serverWrapper = $serverWrapper;
    }

    public function getPageForRoute()
    {
        switch($this->serverWrapper->getUrl()){
            case '/index':
                return $this->factory->getIndexPage()->run();
            case '/allRecipes':
                return $this->factory->getAllRecipePage()->run();
            case '/specificRecipe':
                return $this->factory->getSpecificRecipePage()->run();
            case '/insertRecipe':
                return $this->factory->getInsertRecipePage()->run();
        default:
            return '505 - Not Found';
        }
    }
}