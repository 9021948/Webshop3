<?php
 include("connect.php");

 $sql = "SELECT * FROM fietsen";

 $stmt = $conn->prepare($sql);
 
 $stmt->execute();
 $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 

echo "<br>";
echo "<table border=1px>";

echo "<tr>
<th>Merk</th>
<th>Type</th>
<th>Prijs</th>
<th>Foto</th>
</tr>
";

foreach($result as $row) {
    echo 
    echo "<td>". $row['Merk'] . '</td>';
    echo "<td>". $row['Merk'] . '</td>';
    echo "<td>". $row['Merk'] . '</td>';
    echo "<td>". $row['Merk'] . '</td>';
}
$sql = "SELECT * FROM fietsen";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt ->fetchAll(PDO::FETCH_ASSOC);

?>