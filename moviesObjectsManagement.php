<?php
include_once __DIR__ . "/db/db.php";

require_once __DIR__ . "/Models/Genre.php";
require_once __DIR__ . "/Models/Movie.php";

$moviesObjectsArray = [];

foreach ($moviesDatas as $singleMovie) {
    ${$singleMovie['name']} = new Movie(
        $singleMovie["title"],
        new Genre($singleMovie["primaryGenre"], $singleMovie["secondaryGenre"]),
        $singleMovie["year"]
    );
    array_push($moviesObjectsArray, $singleMovie);
}
