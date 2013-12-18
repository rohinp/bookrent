<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/12/13
 * Time: 2:46 PM
 */

namespace src\main\book\booksearch;


interface BookSearcher {
    public function search($store,$searchString);
    public function getResults();
}

?>