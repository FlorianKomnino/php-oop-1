<?php

require_once __DIR__ . "/Models/Movie.php";
include_once __DIR__ . "/db/db.php";
require_once __DIR__ . "/Models/Genre.php";



$ritornoAlFuturo =
    new Movie(
        $backToTheFuture["title"],
        new Genre($backToTheFuture["primaryGenre"], $backToTheFuture["secondaryGenre"]),
        $backToTheFuture["year"]
    );

$ritornoAlFuturoII =
    new Movie(
        $backToTheFutureII["title"],
        new Genre($backToTheFutureII["primaryGenre"], $backToTheFutureII["secondaryGenre"]),
        $backToTheFutureII["year"]
    );

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>

<body>
    <main>
        <h1>
            Welocome to the best streaming service ever!!!
        </h1>
        <h2>
            Choose your movie from our giant collection! ;)
        </h2>

        <pre>
            <?php echo $ritornoAlFuturo->title; ?>
            <?php echo $ritornoAlFuturoII->genre->primaryGenre; ?>
            <?php echo $ritornoAlFuturo->genre->secondaryGenre; ?>
            <?php echo $ritornoAlFuturo->year; ?>
        </pre>

        <pre>
            <?php echo $ritornoAlFuturoII->title; ?>
            <?php echo $ritornoAlFuturoII->genre->primaryGenre; ?>
            <?php echo $ritornoAlFuturoII->genre->secondaryGenre; ?>
            <?php echo $ritornoAlFuturoII->year; ?>
        </pre>

    </main>
</body>

</html>