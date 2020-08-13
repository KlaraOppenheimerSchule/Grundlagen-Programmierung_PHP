<?php
class Book {
    private $isbn;
    private $title;
    private $author;
    private $available;

    public static $amountOfBooks=0;

    public function __construct(string $isbn, string $title, string $author, bool $available)
    {
        $this->isbn=$isbn;
        $this->title=$title;
        $this->author=$author;
        $this->available=$available;

        self::$amountOfBooks++;
    }

    public function getPrintableTitle(): string {
        $result = $this->title . " " . $this->author . "</br>";
        if(!$this->available) 
        {
            $result .= 'Not available'; 
        }
        return $result;
    }

    public function setTitel($neuerTitel)
    {
        if($neuerTitel != "2020")
        {
            $this->title=$neuerTitel;    
        }
        else
        {
            echo "Kein Bock auf 2020". "</br>";
        }
    }  
    
    public function getAmountOfBooks()
    {
        return self::$amountOfBooks;
    }
}

$myFirstBook=new Book("123456789", "1984", "George Orwell", true);
echo $myFirstBook->getPrintableTitle();

#$myFirstBook->title="2021";

$myFirstBook->setTitel("2020");
echo $myFirstBook->getPrintableTitle();

echo ($myFirstBook->getAmountOfBooks());
$myFirstBook=new Book("123456789", "1984", "George Orwell", true);
echo ($myFirstBook->getAmountOfBooks());