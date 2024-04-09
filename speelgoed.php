<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>winkelmandje</title>
</head>
<body>

    <nav>
        <h1 class="logo">SJ</h1>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="speelgoed.php">Speelgoed</a></li>
            <li><a href="overons.php">ONS</a></li>
        </ul>

        <img src="./assets/shopping-cart.gif" class="winkelmandje">
    </nav>

    <?php

        include 'function.php';

        Producten();

    ?>
    
<?php
    include 'function.php';
    Producten();
?>
</body>
</html>