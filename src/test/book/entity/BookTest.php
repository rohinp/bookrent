<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 28/11/13
 * Time: 8:23 AM
 */

namespace src\test\book\entity;

require('../../../main/book/entity/Book.php');

use src\main\book\entity\Book as Book;

class BookTest extends \PHPUnit_Framework_TestCase {

    public function testShouldCreateBookWithISBN(){
        $book = new Book("1234");
        assert(($book->getISBN() == "1234"));
    }

    public function testShouldCreateBookWithAuthor(){
        $book = new Book("1234");
        $book->setAuthor("rohin");
        assert(($book->getAuthor() == "rohin"));
    }

    public function testShouldCreateBookWithTitle(){
        $book = new Book("1234");
        $book->setTitle("rohin");
        assert(($book->getTitle() == "rohin"));
    }

    public function testShouldCreateBookWithTags(){
        $book = new Book("1234");
        $book->setTag("rohin");
        $book->setTag("xyz");
        assert($book->getTags()[0] == "rohin");
        assert($book->getTags()[1] == "xyz");
    }
}
 