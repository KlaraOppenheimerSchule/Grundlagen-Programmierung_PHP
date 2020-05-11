<?php
class Book {
    private $isbn;
    private $title;
    private $author;
    private $available;

    public function __construct(string $isbn, string $title, string $author, bool $available)
    {
        $this->isbn=$isbn;
        $this->title=$title;
        $this->author=$author;
        $this->available=$available;
    }

    public function getIsbn(): string
    {
        return $this->isbn;
    }

    public function setIsbn(string $isbn): void
    {
        $this->isbn=$isbn;   
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title=$title;   
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(string $author): void
    {
        $this->author=$author;   
    }

    public function getAvailable(): string
    {
        return $this->available;
    }

    public function setAvailable(string $available): void
    {
        $this->available=$available;   
    }
}

$myFirstBook=new Book("123456789", "1984", "George Orwell", true);
echo $myFirstBook->getTitle();
echo $myFirstBook->getAuthor();
echo $myFirstBook->getIsbn();
echo $myFirstBook->getAvailable();