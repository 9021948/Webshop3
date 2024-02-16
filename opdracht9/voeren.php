<?php
if ($_SERVER ['REQUEST_METHOD']=="POST") 
    include 'connect.php';

    $leerling = htmlspecialchars($_POST['leerling']);
    $cijfers = filter_input(INPUT_POST,'cijfer', FILTER_VALIDATE_INT, ["options"=>["min_range"=>1, "max_range"=> 10]]);
    $vak = htmlspecialchars($_POST['vak']);
    $docent = htmlspecialchars($_POST['docent']);
    
    if ($leerling !== false && $cijfers !== $vak !== false && $docent !==false){
    
        $queryquery = $db ->prepare("INSERT INTO cijfers (leerling, cijfer, vak, docent) VALUES (:leerling, :cijfer, evak, :docent)");

        $query ->bindParam(':leerling', $leerling);
        $query ->bindParam(':cijfer', $cijfers);
        $query ->bindParam(':vak', $vak);
        $query ->bindParam(':docent', $docent);

        if ($query->execute()){
            echo "het is toegevoegd.</br><a href='index.php'> ga terug naar het systeem</a>";}

        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdr8</title>
</head>
<body>
    <h2> voer een nieuwe cijfer toe</h2>
    
    <form action="invoeren.php" method="post">
      
      <label for="leerling">leerling:</label><br>
      <input type="text" id="leerling" name="leerling" required><br>

      <label for="cijfer">cijfer:</label><br>
      <input type="number" id="cijfer" name="cijfer" min="1" max="20" required><br>

      <label for="vak">vak:</label><br>
      <input type="text" id="vak" name="vak" required><br>

      <label for="docent">docent:</label><br>
      <input type="text" id="docent" name="docent" required><br>

      <input type="submit" value="voegen">

</form>
    
</body>
</html>