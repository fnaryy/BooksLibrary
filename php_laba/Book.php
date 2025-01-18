<?php   
    class Book {
        public $title;
        public $author;
        public $year;
        public $isAvailable;

        public function __construct($title, $author , $year){
            $this->author = $author;
            $this->title = $title;
            $this->year = $year;
            $this->isAvailable = true;
        }

        public function getTitle(){
            return $this->title;
        }
        public function getAuthor(){
            return $this->author;
        }
        public function getYear(){
            return $this->year;
        }
        public function getAvailability(){
            return $this->isAvailable;
        }

        public function setAvailability($status) {
            $this->isAvailable = $status;
        }

        // function displayInfo()
        // {
        //     echo "Tile: $this->title; Author: $this->author; Year: $this->year<br>";
        // }
    };


// $BookName = new Book("Война и Мир", "Л. Толстой", "1940");
// $BookName -> displayInfo();

// $ookName = new Book("Преступление и наказание", "Л. Толстой", "1940");
// $ookName -> displayInfo();
?>
