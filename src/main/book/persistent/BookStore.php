<?php

namespace src\main\book\persistent;

require(dirname(__FILE__) . "/../factory/SQLEngine.php");
require(dirname(__FILE__) . "/../dbgateway/BookStorable.php");

use src\main\book\dbgateway\BookStorable as BookStorable;
use src\main\book\entity\Book as Book;
use src\main\book\factory\SQLEngine as SQLEngine;

class BookStore implements BookStorable{

    private $sqlQuery;
    public function __construct(){
    }

    public function addBook(Book $book){
        $this->sqlQuery = "INSERT INTO book (isbn,title,author,tags,subtitle,cost,dateadded)  VALUES ";
        $this->sqlQuery .= "('". $book->getISBN()." ','". $book->getTitle(). "','". $book->getAuthor()."','";
        $this->sqlQuery .= $book->getTags()."','".$book->getSubTitle()."', '".$book->getDateTime()."')";
        SQLEngine::executeQuery($this->sqlQuery);
    }

    public function updateBook(Book $book){
        $this->sqlQuery = "UPDATE book";
        $this->sqlQuery .= "SET title='$book->getTitle()', author='$book->getAuthor()', tags ='$book->getTags()', subtitle = '$book->getCost()', dateadded = '$book->getDateTime()'";
        $this->sqlQuery .= "WHERE isbn = '$book->getISBN()'";
        SQLEngine::executeQuery($this->sqlQuery);
    }

    public function deleteBook(Book $book){
        $this->sqlQuery = "DELETE FROM book";
        $this->sqlQuery .= "WHERE isbn = '$book->getISBN()'";
        SQLEngine::executeQuery($this->sqlQuery);
    }

    public function getTotalBooks(){
        SQLEngine::executeQuery("SELECT COUNT(*) FROM book");
        return SQLEngine::getResultSet();
    }
}

?>