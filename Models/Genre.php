<?php

class Genre
{
    public $primaryGenre;
    public $secondaryGenre;

    public function __construct($primaryGenre, $secondaryGenre)
    {
        $this->primaryGenre = $primaryGenre;
        $this->secondaryGenre = $secondaryGenre;
    }
}
