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

    $update_query = $conn->prepare($update_sql);
    
    // Uitvoeren van de update query
    $update_success = $update_query->execute([
        'merk'=>$_POST['merk'],
        'type'=>$_POST['type'],
        'prijs'=>$_POST['prijs'],
        'id'=>$_POST['id'],
    ]);

    if ($update_success) {
        // DELETE query
        $delete_sql = " 
           DELETE FROM fietsen
           WHERE id = :id";
        
        $delete_query = $conn->prepare($delete_sql);
        
        // Uitvoeren van de delete query
        $delete_query->execute([
            'id'=>$_POST['id'],
        ]);

        if ($delete_query->rowCount() == 1){
            echo "<script>alert('fiets is gewijzigd en verwijderd')</script>";
            echo "<script> location.replace('homepage.php'); </script>";
        } else {
            echo '<script>alert("fiets is gewijzigd maar niet verwijderd")</script>'; 
        }
    } else {
        echo '<script>alert("fiets is NIET gewijzigd")</script>'; 
    }
}
?>