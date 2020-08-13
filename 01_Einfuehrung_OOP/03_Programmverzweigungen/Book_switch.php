<?php
class Book {
    private $isbn;
    private $title;
    private $author;
    private $price;
    private $category;

    public function __construct(string $isbn, string $title, string $author, float $price, int $category)
    {
        $this->isbn=$isbn;
        $this->title=$title;
        $this->author=$author;
        $this->price=$price;
        $this->category=$category;
    }

    public function getIsbn(): string
    {
        return $this->isbn;
    }

    public function setIsbn(string $isbn): void
    {
        $this->isbn=$isbn;   
    }

    public function calculateShippingCoasts() : float
    {
        if($this->price>20)        
        {
            return 0;
        }
        else
        {
            return 3.90;
        }
    }

    public function getBookKategorie() : string 
        {
            $categoryName;

            switch($this->category)
            {
                case 1:
                    $categoryName= "Action";
                    break;
                case 2:
                    $categoryName = "Fantasy";
                    break;
                case 3:
                    $categoryName = "Horror";
                    break;
                case 4:
                    $categoryName = "Classics";
                    break;
                default:
                    $categoryName = "Unknown";
                    break;
            }
            return $categoryName;
        }
}

$myFirstBook=new Book("123456789", "1984", "George Orwell", 20.6, 4);
echo $myFirstBook->getIsbn();
echo $myFirstBook->calculateShippingCoasts();
echo $myFirstBook->getBookKategorie();