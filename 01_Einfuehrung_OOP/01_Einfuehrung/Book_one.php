<?php
class Book {
    private $isbn;
    private $title;
    private $author;
    private $price;

    public function __construct(string $isbn, string $title, string $author, float $price)
    {
        $this->isbn=$isbn;
        $this->title=$title;
        $this->author=$author;
        $this->price=$price;
    }

    public function getIsbn(): string
    {
        return $this->isbn;
    }

    public function setIsbn(string $isbn): void
    {
        $this->isbn=$isbn;   
    }
}

$myFirstBook=new Book("123456789", "1984", "George Orwell", 20.6);
echo $myFirstBook->getIsbn();