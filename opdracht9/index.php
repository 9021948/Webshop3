<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdr8</title>
    <style>
 table,td,th {
        border: 1px solid black;
        border-collapse:collapse;
    }
    th, td {
        padding: 8px;
        text-align: left;
    }
    th {
        cursor: pointer;
    }
    </style>
   
</head>
<body>
    <a href="zoeken.php">zoeken</a>
    <a href="invoeren.php">inrvoeren</a>
    <?php
    include 'connect.php';

    $query = $db->prepare("SELECT*cijfer");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    echo "<table>";
    echo "<tr><th>leeerling</th><th>cijfer</th><th>vak</th><ht>docent</ht><th>acties</th><tr></tr>";
    
    foreach ($result as $data) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($data['leerling']) . "</td>";
        echo "<td>" . htmlspecialchars($data['cijfer']) . "</td>";
        echo "<td>" . htmlspecialchars($data['vak']) . "</td>";
        echo "<td>" . htmlspecialchars($data['docent']) . "</td>";
        echo "td><a href='delete.php?id=" . $data['id'] . "'onclick='return confirmDelete()'>verwijder</a></td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <script>
        function confirmDelete(){
            return confirm;
        }
    </script>
</body>
</html>