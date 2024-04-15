<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./assets/toy-shop.png" type="image/x-icon">
    <title>Wijzigen</title>
</head>
<body class='body-insert'>

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

    <?php
    
            include 'function.php';
            include 'connect.php';
    
            if (isset($_POST['wijzgbtn'])) {
    
                Insert();
                header('location: speelgoed.php');
                exit;
    
            }

            $sql = "SELECT * FROM product WHERE productcode = :productcode"; 
            $query = $connect->prepare($sql);
            $query->execute([':productcode' => $_GET['id']]); 
            $result = $query->fetch(); 
    

    ?>
    <form method="post" class="form-insert">

<label>Naam:</label>
<input type="text" name="naam" placeholder="Product Naam" required class="input-settings" value="<?php echo $result["naam"];?>">
<br>
<label>Prijs:</label>
<input type="number" name="prijs" placeholder="de Prijs" required class="input-settings" min="0" max="9999" value="<?php echo $result["prijs"];?>">
<br>
<label>Foto:</label>
<input type="text" name="foto" placeholder="Insert de (Foto_Naam.filetype)" required class="input-settings" value="<?php echo $result["foto"];?>">
<br>
<label>Beschrijving:</label>
<textarea name="beschrijving" cols="35" rows="10" class="textarea-settings" placeholder="Beschrijving over de Product"></textarea value="<?php echo $result["beschrijving"];?>">
<br>
<input type="submit" value="wijzigen" name="wijzgbtn" class="insert-btn">

</form>



    <footer class="footer-alles">
        <h3 class="h3t">©Copyright 2024 Junior’s Toys. Alle rechten voorbehouden.</h3>
    </footer>

</body>
</html>