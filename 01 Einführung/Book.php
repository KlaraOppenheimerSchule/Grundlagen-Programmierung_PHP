<?php
class Book {
    public $isbn;
    public $title;
    public $author;
    public $available;

    public function __construct(string $isbn, string $title, string $author, bool $available)
    {
        $this->isbn=$isbn;
        $this->title=$title;
        $this->author=$author;
        $this->available=$available;
    }

    public function getPrintableTitle(): string {
        $result = '<i>' . $this->title . '</i> - ' . $this->author;
        if(!$this->available) {
            $result .= ' <b>Not available</b>'; }
            return $result;
    }
}

$myFirstBook=new Book("123456789", "1984", "George Orwell", true);
echo $myFirstBook->getPrintableTitle();