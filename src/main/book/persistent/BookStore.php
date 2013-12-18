<?php

namespace src\main\book\persistent;

require(dirname(__FILE__) . "/../entity/Book.php");
require(dirname(__FILE__) . "/../factory/DBFactory.php");
require(dirname(__FILE__) . "/../dbgateway/BookStorable.php");

use src\main\book\dbgateway\BookStorable as BookStorable;
use src\main\book\entity\Book as Book;
use src\main\book\factory\SQLEngine as SQLEngine;

class BookStore implements BookStorable{

    private $sqlQuery;
    public function __construct(){
    }

    public function addBook(Book $book){
        $this->sqlQuery = "INSERT INTO book (isbn,title,author,tags,subtitle,cost,dateadded)";
        $this->sqlQuery .= " VALUES ";
        $this->sqlQuery .= "('$book->getISBN()','$book->getTitle()','$book->getAuthor()','$book->getTags()','$book->getSubTitle()', '" . date("Y-m-d H:i:s"). "')";
        SQLEngine::executeQuery($this->sqlQuery);
    }
    public function updateBook(Book $book){
        $this->sqlQuery = "";
        SQLEngine::executeQuery($this->sqlQuery);
    }
    public function deleteBook(Book $book){
        $this->sqlQuery = "";
        SQLEngine::executeQuery($this->sqlQuery);
    }
}

?>