<?php
include 'Book.php';
include 'Reader.php';
include 'Library.php';

$library = new Library();

$book1 = new Book("Война и Мир", "Л. Толстой", " 1863–1869");
$book2 = new Book("Преступление и наказание", "Р. Достоевский", "1865");

$library->addBook($book1);
$library->addBook($book2);

$reader1 = new Reader("Максим", "randomname@gmail.com");
$reader2 = new Reader("Дмитрий", "randomusername@mail.ru");

$library->addReader($reader1);
$library->addReader($reader2);

$library->listBooks();

$reader1->borrowBook($book1);
$reader2->borrowBook($book2);

$library->listBooks();

