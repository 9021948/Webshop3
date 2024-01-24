<?php
//Functie voor cirkelberekeningen

function berekenCirkel($straal) {
    $pi = 3.14;
    $omtrek = 2 * $pi * $straal;
    $oppervlakte = $pi * pow($straal, 2); // pow voor het kwadraat

    return array("omtrek" => $omtrek, "oppervlakte" => $oppervlakte);
}

$straal = 5; // Voorbeeld straal
$resultaat = berekenCirkel($straal);

echo "Omtrek van de cirkel met straal " . $straal . ": " . $resultaat['omtrek'] . "<br>";
echo "Oppervlakte van de cirkel met straal " . $straal . ": " . $resultaat['oppervlakte'];
?>
?php>