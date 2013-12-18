<?php

namespace src\main\book\dbgateway;

require(dirname(__FILE__) . "/../entity/Book.php");

use src\main\book\entity\Book as Book;

interface BookStorable {
    public function addBook(Book $book);
    public function updateBook(Book $book);
    public function deleteBook(Book $book);
}