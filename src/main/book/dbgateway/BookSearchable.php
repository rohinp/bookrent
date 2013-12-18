<?php

namespace src\main\book\dbgateway;


interface BookSearchable {

    public function searchByISBN($isbn);
    public function searchByAuthor($author);
    public function searchByTitle($title);
    public function searchByTags($tags);

}