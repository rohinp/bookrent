<?php

namespace src\main\book\entity {

    class Book {
        private $isbn;
        private $author;
        private $title;
        private $subTitle;
        private $tags;
        private $cost;

        public function __construct($isbn){
            $this->isbn = $isbn;
            $this->tags = array();
        }

        public function getISBN(){
            return $this->isbn;
        }

        public function setAuthor($author){
            $this->author = $author;
        }

        public function getAuthor(){
            return $this->author;
        }

        public function setTitle($title){
            $this->title = $title;
        }

        public function getTitle(){
            return $this->title;
        }

        public function setSubTitle($subTitle){
            $this->subTitle= $subTitle;
        }

        public function getSubTitle(){
            return $this->subTitle;
        }

        public function setTag($tag){
            array_push($this->tags,$tag);
        }

        public function getTags(){
            $tagsList = "";
            foreach($this->tags as $tg)
                $tagsList .=  $tg . ",";
            return $tagsList;
        }

        public function setCost($mrp){
            $this->cost = $mrp;
        }

        public function getCost(){
            return $this->cost;
        }

        public function getDateTime(){
            date_default_timezone_set(date_default_timezone_get());
            return date("Y-m-d H:i:s");
        }
    }

}?>