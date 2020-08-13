<?php

class JSON_Handler
{ 
    private $adressbook;

    public function loadAdresses($kindOfBook) 
    {
        if($kindOfBook == "private")
        {
            $contactsJson = file_get_contents('Models/privateAdressbook.json');
            $contacts = json_decode($contactsJson, true);    
            
            require_once 'Models/Adressbook.php';
            $this->adressbook=new Adressbook("Privates Adressbuch");
        }
        else
        {
            $contactsJson = file_get_contents('Models/businessAdressbook.json');
            $contacts = json_decode($contactsJson, true);    
            
            require_once 'Models/Adressbook.php';
            $this->adressbook=new Adressbook("Berufliches Adressbuch");
        }
        
        foreach ($contacts as $contact)
        {
            require_once 'Models/Contact.php';
            $tempContact=new Contact($contact['id'], $contact['name'], $contact['phone']);
            $contactObjects[]=$tempContact;
        } 

        $this->adressbook->setContacts($contactObjects);

        return $this->adressbook;
    }
    
}