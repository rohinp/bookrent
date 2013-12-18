<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/12/13
 * Time: 7:25 PM
 */

namespace src\test\book\persistent;
require(dirname(__FILE__) . "/../../../main/book/entity/Book.php");
require(dirname(__FILE__) . "/../../../main/book/persistent/BookStore.php");
require(dirname(__FILE__) . "/../../../main/book/booksearch/BookSearch.php");
require(dirname(__FILE__) . "/../../../main/book/booksearch/ISBNSearch.php");

use src\main\book\entity\Book as Book;
use src\main\book\persistent\BookStore as BookStore;
use src\main\book\search\BookSearch as BookSearch;
use src\main\book\search\ISBNSearch;

class BookStoreTest extends \PHPUnit_Framework_TestCase {

    public function testShouldStoreBookInDatabase(){
        //given
        $bookStore = new BookStore();
        $bookSearch = new BookSearch($bookStore, new ISBNSearch());
        $book = new Book("1234");

        //when
        $bookStore->addBook($book);

        //then
    }

}
 