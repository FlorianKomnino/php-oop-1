<?php

require_once __DIR__ . "/Models/Movie.php";



$ritornoAlFuturo = new Movie("Ritrono al Futuro", "Sci-fi", 1985);

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
        </pre>

        <p>
            <?php echo $ritornoAlFuturo->getYear() ?>

        </p>
    </main>
</body>

</html>