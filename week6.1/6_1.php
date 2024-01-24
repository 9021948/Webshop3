<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6.1</title>
</head>
<body>
    
</body>
</html>


<?php
session_start();

if(isset($_SESSION['page_visits'])) {
    $_SESSION['page_visits']++;
} else {
    $_SESSION['page_visits'] = 1;
}

echo "Aantal keer op deze pagina: " . $_SESSION['page_visits'];
?>
<?php


