<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkgetal</title>
</head>
<body>
    <h1> Controleer getal</h1>
    <form action="" method="post">
        <input type="number" name="getal" id="" placeholder="voer getal in">
        <input type="submit" value="Check">
    </form>

     <?php
      
      // test of Check-knop is ingedrukt
      if (isset($_post['submit'])) {
        echo "Getal ingevoerd" .$_post['getal'];
      } else {
        echo "niets ingevoerd";
      }
      echo "<br>";

     ?>
</body>
</html>