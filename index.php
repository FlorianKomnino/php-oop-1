<?php

include_once __DIR__ . "/db/db.php";
include_once __DIR__ . "/moviesObjectsManagement.php";
require_once __DIR__ . "/Models/Genre.php";
require_once __DIR__ . "/Models/Movie.php";


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./styles/style.css">

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

        <div class="singleCard">
            <?php foreach ($moviesObjectsArray as $movieToShow) {  ?>

                <?php echo $movieToShow['title']; ?>
                <?php echo $movieToShow['primaryGenre']; ?>
                <?php echo $movieToShow['secondaryGenre']; ?>
                <?php echo $movieToShow['year']; ?>
                </br>
            <?php
            }

            ?>
        </div>

    </main>
</body>

</html>