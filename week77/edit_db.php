<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    print_r($_POST);

    include "connect.php";

    // UPDATE query
    $update_sql= "
        UPDATE fietsen SET
          Merk = :merk,
          type = :type,
          prijs = :prijs
        WHERE id = :id
    ";

    $query = $conn->prepare($update_sql);
    
    // Uitvoeren van de update query
    $query->execute([
        'merk'=>$_POST['merk'],
        'type'=>$_POST['type'],
        'prijs'=>$_POST['prijs'],
        'id'=>$_POST['id'],
    ]);

    // DELETE query
    $delete_sql = " 
       DELETE FROM fietsen
       WHERE id = :id";
    
    $delete_query = $conn->prepare($delete_sql);
    
    // Uitvoeren van de delete query
    $delete_query->execute([
        'id'=>$_POST['id'],
    ]);

    if ($query->rowCount() == 1){
        echo "<script>alert('fiets is gewijzigd')</script>";
        echo "<script> location.replace('homepage.php'); </script>";
    } else {
        echo '<script>alert("fiets is NIET gewijzigd")</script>'; 
    }
}
?>

