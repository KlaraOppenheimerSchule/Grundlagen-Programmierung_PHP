<?php

declare(strict_types=1);
namespace Adressbuch;
require 'Contact.php';

class Addressbook
{

    private array $contactCollection;



    public function showAll(): string
    {
        $contactInfo = "";
            foreach ($this->addressBookObjectsAsArray() as $contactObjects)
            {

                $contactInfo .= "<br>" .

                     "Id: " . $contactObjects->get_id() . "<br>" .
                     "Type: " . $contactObjects->get_contacttype() . "<br>" .
                     "Name: " . $contactObjects->get_name() . "<br>" .
                     "E-Mail: " . $contactObjects->get_email() . "<br>" .
                     "Phonenumber: " . $contactObjects->get_phone() . "<br>" .
                     "Twitter: " . $contactObjects->get_twitter() . "<br>";
            }

        return $contactInfo;
    }

    public function showByName(string $name): array
    {
        $relevantContacts = [];


            foreach ($this->addressBookObjectsAsArray() as $contactObjects)
            {
                if($name == $contactObjects->get_name())
                {
                    $relevantContacts[] = $contactObjects;
                }
            }

        return $relevantContacts;
    }

    public function addContact(object $contact)
    {
        $this->contactCollection[$contact->get_contacttype()][] = $contact;
    }

    public function getContact(int $id): object
    {
        $contact = "";

            foreach ($this->addressBookObjectsAsArray() as $contactObjects)
            {
                     if($contactObjects->get_id() == $id)
                     {
                         $contact = $contactObjects;
                     }

            }
        return $contact;
    }

    public function removeContact(int $id)
    {

    }
    public function addressBookObjectsAsArray(): array
    {
        $AddressBooks = [];
        foreach ($this->contactCollection as $AddressbookNames)
        {
            foreach ($AddressbookNames as $ContactObjects)
            {
                $AddressBooks[] = $ContactObjects;
            }
        }
        return $AddressBooks;
    }

}