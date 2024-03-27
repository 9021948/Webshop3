<?php

    function Producten(){
        include 'connect.php';

        $sql = "SELECT * FROM product";
        $query = $connect->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();

        foreach ($result as $product) {
            echo '<div class="product-div">';
                echo $product['naam'];
                echo '<br>';
                echo $product['prijs'];
                echo '<br>';
                echo $product['beschrijving'];
            echo '</div>';
        }
    }

?>