<?php

class Movie {
    public $title;
    public $director;
    public $year;
    public $genres = [];

    function __construct($_title, $_director, $_year, $_genres = [])
    {
       $this->title = $_title;
       $this->director = $_director; 
       $this->year = $_year; 
       $this->genres = $_genres;  
    }

    public function addGenre($_genres){
        $this->genres[] = $_genres; 
    }
}