<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 27/11/13
 * Time: 10:02 AM
 */

namespace src\main\book\booksearch;

require("../book/entity/Book.php");

use src\main\book\entity\Book;

class BookSearch {
    private $bookStore;
    private $bookSearcher;

    public function __construct($bookStore, $bookSearcher){
        $this->$bookStore = $bookStore;
        $this->bookSearcher = $bookSearcher;
    }

    public function searchBy($searchString){
        $this->bookSearcher->search($this->bookStore,$searchString);
    }

    public function searchResults(){
        return $this->bookSearcher->getResults();
    }

} 