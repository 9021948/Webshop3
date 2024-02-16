<?php
include 'connect.php';
if (isset($_GET['id']) && is_numeric ($_GET['id']))
    $id= $_GET['id'];
    $query = $db ->prepare("DELETE FROM cijfer where id =id");
    $query ->bindParam(':id', $id, PDO::PARAM_INT);

    if ($query->execute())
    header("location: index.php");
    exit;

?>