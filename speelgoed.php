<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta-informatie instellen -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/toy-shop.png" type="image/x-icon">
    
    <!-- Verwijzing naar externe CSS-stijlblad -->
    <link rel="stylesheet" href="style.css">
    
    <!-- Titel van de pagina -->
    <title>Speelgoed</title>
</head>
<body class="body-speelgoed">

    <!-- Navigatiemenu -->
    <nav>
        <h1 class="logo">SJ</h1>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="speelgoed.php">Speelgoed</a></li>

            <div class="dropdown">

                <li class="dropbtn"><a href="overons.php#home">Over ons <span class="arrow-down">&#9660;</span></a></li>

                <div class="dropdown-content">
                    <li class="drop-li"><a href="overons.php#junior">Junior</a></li>
                    <li class="drop-li"><a href="overons.php#jandro">Jandro</a></li>
                    <li class="drop-li"><a href="overons.php#dean">Dean</a></li>
                </div>

            </div>
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
        <h3 class="h3t">©Copyright 2024 Junior’s Toys. Alle rechten voorbehouden.</h3>
    </footer>

</body>
</html>
