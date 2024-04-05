<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

function Producten(){
    include 'connect.php';

    $sql = "SELECT * FROM product";
    $query = $connect->prepare($sql);
    $query->execute();
    $result = $query->fetchAll();

    echo '<div class="main-div">';

    foreach ($result as $product) {
        echo '<div class="product-div">';
            echo $product['naam'];
            echo '<br>';
            echo $product['prijs'];
            echo '<br>';
            echo $product['beschrijving'];
            echo '<br>';
            echo "<button>Wijzegen</button>";
            echo "<button>Verwijderen</button>";
        echo '</div>';
        echo '<br>';
    }

    echo '</div>';
}

?>
</body>
</html>
?>
