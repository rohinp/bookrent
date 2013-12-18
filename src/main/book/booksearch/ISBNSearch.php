<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/12/13
 * Time: 2:52 PM
 */

namespace src\main\book\booksearch;


class ISBNSearch implements BookSearcher{

    private $rawData;
    private $books;

    public function search($store,$isbn){
        $this->rawData = $store->selectBookByISBN($isbn);
    }

    public function getResults(){

    }

} 