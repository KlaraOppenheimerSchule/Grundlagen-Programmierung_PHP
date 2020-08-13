<?php

class Adressbook 
{   
    private $name;
    private $contacts;

    public function __construct(string $name)
    {
        $this->name=$name;
    }

    public function getName(): string
    {
        return $this->name;
    }   
    
    public function setContacts($contacts)
    {
        $this->contacts=$contacts;
    }   

    public function getContacts(): array
    {
        return $this->contacts;
    }   
    
}