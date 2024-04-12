<?php
    // Een poging om verbinding te maken met de database
    try {
        // PDO-object maken voor databaseverbinding
        $connect = new PDO("mysql:host=localhost;dbname=toystore", "root", "");
        // Instellen van foutmodus om uitzonderingen te genereren
       
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Bericht weergeven bij succesvolle verbinding (tijdelijk uitgeschakeld)
        // echo "Connected successfully";
    } 
    
    catch(PDOException $e) {
        // Bericht weergeven bij mislukte verbinding (tijdelijk uitgeschakeld)
        // echo "Connection failed: " . $e->getMessage();
    }
?>
