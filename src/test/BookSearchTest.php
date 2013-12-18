<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 27/11/13
 * Time: 10:24 AM
 */

namespace src\test;

require('../main/book/booksearch/BookSearch.php');
require('../main/entity/Book.php');

use src\main\book\search\BookSearch;
use src\main\datastructure\Book;

class BookSearchTest extends \PHPUnit_Framework_TestCase {

    public function testShouldSearchByISBNNumber(){
        //given
        $book1 = new Book("1234");
        $book2 = new Book("1235");
        $book3 = new Book("1236");
        $book4 = new Book("1237");


        //when

        //then
    }

    public function testShouldSearchBookByAuthor(){

    }

}
 