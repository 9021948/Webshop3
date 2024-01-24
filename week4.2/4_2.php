<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Opdracht_4.1</title>
</head>
<body>

    <nav>
        <ul>
        <li><a href="Index.html">Home</a></li>
        <li><a href="4_1.php">Opdracht 4.1</a></li>
        <li><a href="4_2.php">Opdracht 4.2</a></li>
        <li><a href="4_3.php">Opdracht 4.3</a></li>
        <li><a href="4_4.php">Opdracht 4.4</a></li>
        </ul>
    </nav>

    <?php

        echo "<h1>Opdracht 4.2</h1>";
        echo "<br>";

        $tijd = date("H : i");

        $choose = match((int)$tijd) {
            6, 7, 8, 9, 10, 11, 11.59 => "Het is Ochtend.",
            12, 13, 14, 15, 16, 17, 17.59 => "Het is Middag.",
            18, 19, 20, 21, 22, 23, 23.59 => "Het is Avond.",
            24, 1, 2, 3, 4, 5, 5.59 => "Het is Nacht.",
            default => "Error",
        };

        echo "<h1>$choose</h1>";

    ?>

</body>
</html>