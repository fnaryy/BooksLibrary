<?php
class Library {
    private $books;
    private $readers;

    public function __construct() {
        $this->books = [];
        $this->readers = [];
    }

    public function addBook($book) {
        $this->books[] = $book;
        echo "Книга '{$book->getTitle()}' добавлена в библиотеку.<br>";
    }

    public function addReader($reader) {
        $this->readers[] = $reader;
        echo "Читатель '{$reader->getName()}' добавлен.<br>";
    }

    public function findBook($title) {
        foreach ($this->books as $book) {
            if ($book->getTitle() === $title) {
                return $book;
            }
        }
        return null;
    }

    public function listBooks() {
        if (empty($this->books)) {
            echo "Нет такой книги в библиотеке .<br>";
            return;
        }

        foreach ($this->books as $book) {
            $status = $book->getAvailability() ? "Найдена" : "Не найдена";
            echo "Название: {$book->getTitle()}, Автор: {$book->getAuthor()}, Статус книги: {$status}<br>";
        }
    }
}
