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
<body>

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

        <!-- Afbeelding van het winkelmandje -->
        <img src="./assets/shopping-cart.gif" class="winkelmandje">
    </nav>

    <?php
        // Inclusie van het bestand met functies
        include 'function.php';

        // Oproepen van de functie 'Producten'
        Producten();
    ?>
    
    <?php
        // Opnieuw inclusie van het bestand met functies
        include 'function.php';
        // Opnieuw oproepen van de functie 'Producten'
        Producten();
    ?>

</body>
</html>
