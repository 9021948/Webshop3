<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./assets/toy-shop.png" type="image/x-icon">
    <title>Insert</title>
</head>
<body class="body-insert">

    <?php

        include 'function.php';

        if (isset($_POST['insertbtn'])) {

            Insert();
            header('location: speelgoed.php');
            exit;

        }

    ?>

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

    <form method="post" class="form-insert">

        <label>Naam:</label>
        <input type="text" name="naam" placeholder="Insert de product Naam" required class="input-settings">
        <br>
        <label>Prijs:</label>
        <input type="number" name="prijs" placeholder="Insert de Prijs" required class="input-settings" min="0" max="9999">
        <br>
        <label>Foto:</label>
        <input type="text" name="foto" placeholder="Insert de (Foto_Naam.filetype)" required class="input-settings">
        <br>
        <label>Beschrijving:</label>
        <textarea name="beschrijving" cols="35" rows="10" class="textarea-settings" placeholder="Beschrijving over de Product"></textarea>
        <br>
        <input type="submit" value="Insert" name="insertbtn" class="insert-btn">

    </form>

    <footer class="footer-alles">
        <h3 class="h3t">©Copyright 2024 Junior’s Toys. Alle rechten voorbehouden.</h3>
    </footer>

</body>
</html>