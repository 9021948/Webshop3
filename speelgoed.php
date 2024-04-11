<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta-informatie instellen -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Verwijzing naar externe CSS-stijlblad -->
    <link rel="stylesheet" href="style.css">
    
    <!-- Titel van de pagina -->
    <title>winkelmandje</title>
</head>
<body class="body-speelgoed">

    <!-- Navigatiemenu -->
    <nav>
        <!-- Logo van de website -->
        <h1 class="logo">SJ</h1>
        <!-- Lijst met navigatielinks -->
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="speelgoed.php">Speelgoed</a></li>
            <li><a href="overons.php">ONS</a></li>
        </ul>
    </nav>

    <h1 class="speelgoed-title">Speelgoed</h1>

    <form method="post" action="insert.php">
        <input type="image" src="./assets/plus.svg" name="insert" class='insert-icon' title="Product Toevoegen"/>
    </form>

    <?php
        // Inclusie van het bestand met functies
        include 'function.php';

        // Oproepen van de functie 'Producten'
        Producten();
    ?>

        <footer class="footer-alles">
            <h3 class="h3t">©Copyright 2024 Junior’s Toys. All rights reserved.</h3>
        </footer>

</body>
</html>
