<?php
//auteur : junior
//functie: voegen van 1 fiets 




if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    echo "Er is gepost<br>";
   
    print_r($_POST);

    // connect database
    include "connect.php";

    // maak een query
    $sql = "INSERT INTO fietsen (Merk, Type, Prijs, Foto) VALUES (:Merk, :Type, :Prijs, :Foto);";
    
    // prepare
    $query = $conn->prepare($sql);
    
    // uitvoeren
    $status = $query->execute(
        [
            ':Merk' => $_POST['Merk'],
            ':Type' => $_POST['Type'],
            ':Prijs' => $_POST['Prijs'],
            ':Foto' => $_POST['Foto']
        ]
    );

    if ($status) {
        echo 'toegevoegd';
    } 
    
    else {
        echo 'fail: ' . implode(" ", $query->errorInfo());
    }
    
    
    // haalt alle data's op
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fietsen Formulier</title>
</head>
<body>

<h2>Voeg een nieuwe fiets toe</h2>
<form action="insert_db.php" methode="post"

<form action="" method="post" enctype="multipart/form-data">
    
  <label for="merk">Merk:</label>
  <input type="text" id="merk" name="Merk" required><br>

  <label for="type">Type:</label>
  <input type="text" id="type" name="Type" required><br>

  <label for="prijs">Prijs:</label>
  <input type="number" id="prijs" name="Prijs" required><br>

  <label for="foto">Foto (Bestandsnaam):</label>
  <input type="text" id="foto" name="Foto" required><br>

  <input type="submit" value="Voeg toe">
 </form>
</body>
</html>