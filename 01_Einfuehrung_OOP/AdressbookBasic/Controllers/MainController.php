<?php

class MainController
{
    private $jsonhandler;
    private $adressbook;

    public function __construct() 
    {
        require_once 'Models/JSON_handler.php';
        $this->jsonhandler=new JSON_handler();  
    }

    public function showAdressbooks()
    {
        require 'Views/Adressbooks.php';
    }

    public function showAll($kindOfBook)
    {
        //Load relevant adressbook
        $this->adressbook=$this->jsonhandler->loadAdresses($kindOfBook);

        require 'Views/ContactsOfAdressbook.php';
    }   

}