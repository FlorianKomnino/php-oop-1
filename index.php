<?php

require_once __DIR__ . "/Models/Movie.php";
include_once __DIR__ . "/db/db.php";



$ritornoAlFuturo = new Movie($backToTheFuture["title"], $backToTheFuture["genre"], $backToTheFuture["year"]);
$ritornoAlFuturoII = new Movie($backToTheFutureII["title"], $backToTheFutureII["genre"], $backToTheFutureII["year"]);

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
            php-oop-1
        </h1>

        <pre>
            <?php echo $ritornoAlFuturo->title; ?>
            <?php echo $ritornoAlFuturo->genre; ?>
            <?php echo $ritornoAlFuturo->year; ?>
            <?php $ritornoAlFuturo->addSecondGenre("Comedy") ?>
            <?php echo $ritornoAlFuturo->secondGenre; ?>
        </pre>

        <pre>
            <?php echo $ritornoAlFuturoII->title; ?>
            <?php echo $ritornoAlFuturoII->genre; ?>
            <?php echo $ritornoAlFuturoII->year; ?>
            <?php $ritornoAlFuturoII->addSecondGenre("Comedy") ?>
            <?php echo $ritornoAlFuturoII->secondGenre; ?>
        </pre>

    </main>
</body>

</html>