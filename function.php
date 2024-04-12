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
        echo '<header class="main-div">';

        // Itereren over elk product en het weergeven
        foreach ($result as $product) {
            echo '<header class="product-div">';
                echo "<img class='product-foto' src='./assets/" . $product['foto'] . "'>";
                // Productinformatie weergeven
                echo "<h1>" . $product['naam'] . "</h1>";
                echo '<br>';
                echo "<h4> &#8364; " . $product['prijs'] . "</h4>";
                echo '<br>';
                echo "<h4 class='product-beschrijving'>" . $product['beschrijving'] . "</h4>";
                echo '<br>';

                echo '<header class="icon">';

                    echo '<form method="post" action="home.php">';
                        echo '<input type="image" src="./assets/cart-add.png" name="add" class="add-icon" title="Product Toevoegen"/>';
                    echo '</form>';

                    // Knoppen voor het wijzigen en verwijderen van producten
                    echo '<form method="post" action="wijzigen.php">';
                        echo '<input type="image" src="./assets/edit.svg" name="wijzigen" class="wijzigen-icon" title="Product Wijzigen"/>';
                    echo '</form>';
                
                    echo '<form method="POST">';
                        echo '<input type="image" src="./assets/verwijder.svg" value="' . $product['productcode'] . '" name="verwijderen" class="verwijderen-icon" title="Product Verwijder"/>';
                    echo '</form>';

                echo '</header>';

            echo '</header>';
            echo '<br>';
        }
        // Einde van de hoofdcontainer voor producten
        echo '</header>';

        if (isset($_POST["verwijderen"])) {
            header('locate: home.php');
            exit;
        }
    }

    function Insert(){

        include "connect.php";

        echo "<script>alert('Product is Toegevoegd');</script>";

        $sql = "INSERT INTO product (productcode, naam, prijs, beschrijving, foto) VALUES (NULL, :naam, :prijs, :beschrijving, :foto)";
        $query = $connect->prepare($sql);
        $query->execute(
            [
                ':naam' => $_POST['naam'],
                ':prijs' => $_POST['prijs'],
                ':beschrijving' => $_POST['beschrijving'],
                ':foto' => $_POST['foto']
            ]);

    }
?>