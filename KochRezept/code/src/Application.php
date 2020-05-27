<?php


namespace KochRezept;

class Application
{
    private $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function run()
    {
        return $this->router->getPageForRoute();
    }
}