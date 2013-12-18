<?php

namespace src\main\book\admin;

require(dirname(__FILE__) . "/../persistent/BookStore.php");
require(dirname(__FILE__) . "/../entity/Book.php");

use src\main\book\entity\Book as Book;
use src\main\book\persistent\BookStore as BookStore;

class BookKeeper {
    private $bookStore;
    private $totalBooksAdded;

    public function __construct(){
        $this->bookStore = new BookStore();
        $this->totalBooksAdded = 0;
    }

    public function addToStore(Book $book){

        $this->bookStore->addBook($book);
    }

    public function isBookInStore($isbn){
        $this->bookStore = new BookStore();
    }
}

?>