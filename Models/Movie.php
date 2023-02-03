<?php

class Movie
{
    public $title;
    public $genre;
    public $year;
    public $secondGenre;

    public function __construct($title, $genre, $year)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
    }

    public function addSecondGenre($genreToAdd)
    {
        $this->secondGenre = $genreToAdd;
    }
}
