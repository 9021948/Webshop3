<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    print_r($_POST);

    include "connect.php";

    // UPDATE query
    $update_sql = "
        UPDATE fietsen SET
          Merk = :merk,
          type = :type,
          prijs = :prijs
        WHERE id = :id
    ";

    $update_query = $conn->prepare($update_sql);

    // Uitvoeren van de update query
    $update_success = $update_query->execute([
        'merk' => $_POST['merk'],
        'type' => $_POST['type'],
        'prijs' => $_POST['prijs'],
        'id' => $_POST['id'],
    ]);

    if ($update_success) {
        echo "<script>alert('Fiets is gewijzigd')</script>";
        echo "<script>location.replace('homepage.php');</script>";
    } else {
        echo '<script>alert("Er is een fout opgetreden tijdens het wijzigen van de fiets")</script>';
    }

    // Als de update succesvol is, voer dan de delete-query uit
    if ($update_success) {
        $delete_sql = "
            DELETE FROM fietsen
            WHERE id = :id
        ";

        $delete_query = $conn->prepare($delete_sql);

        // Uitvoeren van de delete query
        $delete_query->execute([
            'id' => $_POST['id'],
        ]);
    }
}
?>
