<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title›Cijferlijst‹/title>
    <style>
        table, th td {
            border: 1px solid black;
            border-collapse: collapse
        }
        th, td{
            padding: 8px;
            text-align: left;
        }
        th {
            cursor: pointer;
        }
        form {
            margin-bottom: 20px;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="get">
        <label for="search">zoek leerling:</label>
        <input type="text" id="search" name="search" value="charlie">
        <input type="submit" value="zoeken">

    </form>
 <?php
 include 'connect.php';
 $search = $_GET ['search'];
 $query = $dh ->prepare("SELECT leerling, cijfer, vak, docent FROM cijfer WHERE leerling LIKE :search ORDER BY leerling");
 
 $query->bindValue('search', '%' . $search. '%');
 $query->execute();
 $result = $query ->fetchAll(PDO::FETCH_ASSOC);
 
 ?>   
    
</body>
</html>