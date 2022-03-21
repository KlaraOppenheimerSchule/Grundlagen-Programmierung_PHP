<?php
namespace Adressbuch;
include 'Addressbook.php';


$book = new Addressbook();
$book->addContact(new Contact("Peter", "Peter@Peter.Peter.de", "1234456", "@Peter", 1, "private"));
$book->addContact(new Contact("Peter", "Peter@Peter.Peter.de", "1234456", "@Peter", 1, "business"));
$book->addContact(new Contact("Dieter", "Dieter@Dieter.Peter.de", "13421456", "@Dieter", 1, "private"));
$book->addContact(new Contact("Dieter", "Dieter@Dieter.Peter.de", "13421456", "@Dieter", 1, "private"));
$book->addContact(new Contact("Dieter", "Dieter@Dieter.Peter.de", "13421456", "@Dieter", 1, "private"));
$book->addContact(new Contact("Dieter", "Dieter@Dieter.Peter.de", "13421456", "@Dieter", 1, "private"));
$book->addContact(new Contact("Dieter", "Dieter@Dieter.Peter.de", "13421456", "@Dieter", 2, "business"));
//echo $book->showAll();
var_dump($book->showByName("Peter"));
//$book->getContact(2);
//var_dump($book->addressBookObjectsAsArray());
