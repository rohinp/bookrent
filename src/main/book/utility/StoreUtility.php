<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/12/13
 * Time: 4:31 PM
 */

namespace src\main\book\utility;

require(dirname(__FILE__) . '/../entity/Book.php');

use src\main\book\entity\Book as Book;

class StoreUtility {

    private $books;

    public function __construct(){
        $books = array();
    }

    public function queryToBook($queryObject) {
        $index = 0;
        while($row = mysqli_fetch_array($queryObject)) {
            $this->createBook($row, $index);
            $index++;
        }
        print_r($this->books);
        return $this->books;
    }

    private function createBook($row, $index) {
        $this->books[$index] = new Book($row['isbn']);
        $this->books[$index]->setAuthor($row['author']);
        $this->books[$index]->setTitle($row['title']);
        $this->books[$index]->setSubTitle($row['subtitle']);
        $this->books[$index]->setCost($row['cost']);
        $this->addTagToBook($row, $index);
    }

    private function addTagToBook($row, $index) {
        $tags = explode(",", $row['tags']);
        foreach ($tags as $tag) {
            $this->books[$index]->setTag($tag);
        }
    }

}

?>