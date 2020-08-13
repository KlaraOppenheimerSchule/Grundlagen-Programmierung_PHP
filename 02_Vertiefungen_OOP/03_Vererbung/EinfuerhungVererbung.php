<?php
abstract class Medium
{
        private $isbn;
        private $title;
        private $author;
        private $price;

        function __construct(string $isbn, string $title, string $author, float $price)
        {
            $this->isbn = $isbn;
            $this->title = $title;
            $this->author = $author;
            $this->price = $price;
        }

        public function getIsbn(): string
        {
            return $this->isbn;
        }

        public function setIsbn(string $isbn): void 
        {
            $this->isbn = $isbn;
        }
}	

class Book extends Medium
{
        private $edition;

        function __construct(string $isbn, string $title, string $author, float $price, int $edition) 
        {
            $this->edition = $edition;
            parent::__construct($isbn, $title, $author, $price);
        }

        public function getEdition(): int
        {
            return $this->edition;
        }

        public function setEdition(int $edition): void
        {
            if($edition>0)
            {
                $this->edition = edition;
            }
        }
}
			
class DVD extends Medium
{
        private $size;

        function __construct(string $isbn, string $title, string $author, float $price, float $size) 
        {
            $this->size = $size;
            parent::__construct($isbn, $title, $author, $price);
        }

        public function getSize(): float
        {
            return $this->size;
        }

        public function setEdition(fload $size): void
        {
            if ($size > 0 && $size <1000)
            {
                $this->size = $size;
            }
        }    
}		

$book1 = new Book("123456789", "1984", "George Orwell", 20.4, 1);

$dvd1 = new DVD("123456789", "1984", "George Orwell", 20.4, 650);