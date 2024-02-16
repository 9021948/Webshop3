<?php
// Auteur; junior
// Functie: fiets verwijderen


// Test of er data gepost is
if ($_SERVER[' REQUEST _METHOD '] == "GET" &&
 isset ($_GET['id'])) {

   // connect database
   include "connect.php";

   $sql = "
   DELETE from fietsen
   WHERE :id";

   $stmt = $conn->prepare($sql);
   $stmt->execute([
      ':id'=>$_GET['id']
   ]);

   if ($stmt->rowCount() == 1) {
      echo '<script>alert("fiets is verwijderd")</script>';
      echo "<script> location.repclace('homepage.php);</script>";
      
      //header (Location: homepage.php)
   }else {
      echo "Delete is fout gegaan<br>";
   }
      
   

 }
?> 