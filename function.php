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

                    // Knoppen voor het wijzigen en verwijderen van producten
                    echo '<form method="post" action="wijzigen.php?id=' . $product['productcode'] . '">';
                        echo '<input type="image" src="./assets/edit.svg" name="wijzigen" class="wijzigen-icon" title="Product Wijzigen"/>';
                    echo '</form>';
                
                    echo '<form method="post" action="delete.php?id=' . $product['productcode'] . '">';
                        echo '<input type="submit" value="verwijder" name="verwijder" class="verwijderen-icon" title="Product Verwijder"/>';
                    echo '</form>';

                echo '</header>';

            echo '</header>';
            echo '<br>';
        }

        // Einde van de hoofdcontainer voor producten
        echo '</header>';



    }

    function Insert(){

        // Inclusief het bestand met de database verbindingscode
        include "connect.php";
    
        // SQL-query om gegevens in te voegen in de tabel "product"
        $sql = "INSERT INTO product (productcode, naam, prijs, beschrijving, foto) VALUES (NULL, :naam, :prijs, :beschrijving, :foto)";
        
        // Bereid de SQL-query voor op uitvoering
        $query = $connect->prepare($sql);
        
        // Voer de voorbereide query uit met waarden verstrekt in de $_POST-array
        $query->execute(
            [
                ':naam' => $_POST['naam'],
                ':prijs' => $_POST['prijs'],
                ':beschrijving' => $_POST['beschrijving'],
                ':foto' => $_POST['foto']
            ]);
    }

    function verwijder(){

        include 'connect.php';

        if (isset($_POST['verwijder'])) {

            $sql = "DELETE FROM product WHERE productcode = :productcode";
            $query = $connect->prepare($sql);
            $query->execute([':productcode' => $_GET['id']]);

            echo "<script>alert('Product Code: " . $_GET['id'] . "');</script>";
            header('Location: speelgoed.php');
            exit;
        }

    }

    function wijzigen(){

        include 'connect.php';

        if (isset($_POST['wijzgbtn'])) {

            $sql = "UPDATE product SET naam = :naam, prijs = :prijs, beschrijving = :beschrijving, foto = :foto WHERE productcode = :productcode";
            $query = $connect->prepare($sql);
            $query->execute(
                [
                    ':naam' => $_POST['naam'],
                    ':prijs' => $_POST['prijs'],
                    ':beschrijving' => $_POST['beschrijving'],
                    ':foto' => $_POST['foto'],
                    ':productcode' => $_GET['id']
                ]);

            header('Location: speelgoed.php');
            exit;
        }

    }   

?>