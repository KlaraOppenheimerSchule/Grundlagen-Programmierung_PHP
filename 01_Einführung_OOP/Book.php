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

    public function getPrintableTitle(): string {
        $result = $this->title . " " . $this->author;
        if(!$this->available) {
            $result .= 'Not available'; }
            return $result;
    }
}

$myFirstBook=new Book("123456789", "1984", "George Orwell", true);
echo $myFirstBook->getPrintableTitle();