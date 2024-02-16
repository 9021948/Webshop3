<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
include "connect.php";

$sql = "SELECT * FROM fietsen";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<br>";

// tabel
echo '<table border="1px">';

echo "<tr>
    <th>Merk</th>
    <th>Type</th>
    <th>Prijs</th>
    <th>Foto</th>
</tr>";
    
    foreach ($result as $row) {
        echo "<tr>";

        echo "<td>" . $row['Merk'] . "</td>";
        echo "<td>" . $row['Type'] . "</td>";
        echo "<td>" . $row['Prijs'] . "</td>";
        echo '<td>' . '<img src="img/' . $row['foto'] . '">' . ' </td>';
            
        echo "</tr>";
    }
echo "</tabel>";

?>

</body>
</html>