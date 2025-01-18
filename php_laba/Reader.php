<?php   
    class Reader{
        private $name;
        private $email;
        private $borrowedBooks;

        public function __construct($name, $email) {
            $this->name = $name;
            $this->email = $email;
            $this->borrowedBooks = [];
        }

        public function getName(){
            return $this->name;
        }

        public function getEmail(){
            return $this->email;
        }

        public function borrowBook($book) {
            if ($book->getAvailability()) {
                $this->borrowedBooks[] = $book;
                $book->setAvailability(false);
                echo "Книга '{$book->getTitle()}' Книгу взял {$this->name}.<br>";
            } else {
                echo "Книга '{$book->getTitle()}' сейчас недоступна.<br>";
            }
        }
    
        public function returnBook($book) {
            $index = array_search($book, $this->borrowedBooks, true);
            if ($index !== false) {
                unset($this->borrowedBooks[$index]);
                $book->setAvailability(true);
                echo "Книгу '{$book->getTitle()}' вернул {$this->name}.<br>";
            } else {
                echo "Книга '{$book->getTitle()}' не найдена {$this->name}.<br>";
            }
        }   
    }
    
?>