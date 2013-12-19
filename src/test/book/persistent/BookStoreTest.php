<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/12/13
 * Time: 7:25 PM
 */

namespace src\test\book\persistent;
require(dirname(__FILE__) . "/../../../main/book/persistent/BookStore.php");

use src\main\book\entity\Book as Book;
use src\main\book\persistent\BookStore as BookStore;

class BookStoreTest extends \PHPUnit_Framework_TestCase {

    public function testShouldStoreBookInDatabase(){
        //given
        $bookStore = new BookStore();

        $book = new Book("12777");
        $book->setAuthor("test");
        $book->setTag("new,entry");
        $book->setTitle("newTitle");
        $book->setCost(100);
        $book->setSubTitle("testSubTitle");
        //when
        $initialBookCount = $bookStore->getTotalBooks();
        $bookStore->addBook($book);

        //then
        assert($initialBookCount + 1,$bookStore->getTotalBooks() );
    }

}
 