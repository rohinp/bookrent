<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/12/13
 * Time: 9:57 PM
 */

namespace src\test\book\admin;

require(dirname(__FILE__) . "/../../../main/book/admin/BookKeeper.php");
require(dirname(__FILE__) . "/../../../main/book/entity/Book.php");

use src\main\book\admin\BookKeeper as BookKeeper;
use src\main\book\entity\Book as Book;


class BookKeeperTest extends \PHPUnit_Framework_TestCase {

    public function testShouldAddBookToBookStore(){
        //given
        $bookKeeper = new BookKeeper();
        //when
        $book1 = new Book("1234");
        $book2 = new Book("1234");
        $book3 = new Book("1234");

        $bookKeeper->addToStore($book1);
        $bookKeeper->addToStore($book2);
        $bookKeeper->addToStore($book3);

        //then
        assert($bookKeeper->booksAdded() == 3);
    }
}
 