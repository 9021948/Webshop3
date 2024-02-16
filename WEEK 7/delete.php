<?php
// Auteur: junior
// Functie: fiets verwijderen

// Test of er data gepost is
if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['id'])) {

    // Connect database
    include "connect.php";

    $sql = "DELETE FROM fietsen WHERE id = :id";

    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':id' => $_GET['id']
    ]);

    if ($stmt->rowCount() == 1) {
        echo '<script>alert("Fiets is verwijderd")</script>';
        echo "<script>location.replace('homepage.php');</script>";
    } else {
        echo "Verwijderen is fout gegaan<br>";
    }
}
?>
