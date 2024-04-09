<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta-informatie instellen -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Verwijzing naar externe CSS-stijlblad -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

function Producten(){
    // Verbinding maken met de database
    include 'connect.php';

    // SQL-query voor het selecteren van producten
    $sql = "SELECT * FROM product";
    $query = $connect->prepare($sql);
    $query->execute();
    $result = $query->fetchAll();

    // Begin van de hoofdcontainer voor producten
    echo '<div class="main-div">';

    // Itereren over elk product en het weergeven
    foreach ($result as $product) {
        echo '<div class="product-div">';
            // Productinformatie weergeven
            echo $product['naam'];
            echo '<br>';
            echo $product['prijs'];
            echo '<br>';
            echo $product['beschrijving'];
            echo '<br>';
            // Knoppen voor het wijzigen en verwijderen van producten
            echo "<button>Wijzigen</button>";
            echo "<button>Verwijderen</button>";
        echo '</div>';
        echo '<br>';
    }

    // Einde van de hoofdcontainer voor producten
    echo '</div>';
}

?>
</body>
</html>
