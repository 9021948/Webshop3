<?php 

if (isset($_GET['id'])){

    echo "mijn id is: " . $_GET['id'] . "<br>";
    
    // data van id ophalen 
    //connect database
    include "connect.php";

    //maak een query
    $sql = "SELECT * FROM fietsen where id = :id";
    
    //prepare
    $stmt = $conn->prepare($sql);

    //uitvoeren
    $stmt->execute([':id'=> $_GET['id']]);
    
    // ophalen alle data
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    print_r($result);
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

<h2>Wijzig fiets</h2>
<form action="edit_db.php" method="post">

  <input type="hidden" id="id" name="id" required value="<?php echo $result['id']?>"><br>
  
  <label for="merk">Merk:</label>
  <input type="text" id="merk" name="Merk" required value="<?php echo $result['Merk']?>"><br>

  <label for="type">Type:</label>
  <input type="text" id="type" name="Type" required value="<?php echo $result['Type']?>"><br>

  <label for="prijs">Prijs:</label>
  <input type="number" id="prijs" name="Prijs" required value="<?php echo $result['Prijs']?>"><br>

  <input type="submit" value="Wijzig">
</form>
</body>
</html>
