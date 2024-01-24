<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Opdracht_4.3</title>
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

        echo "<h1>Opdracht 4.3</h1>";
        echo "<br>";

        $getal1 = 25;
        $getal2 = 100;

        if ($getal1 > $getal2) {
            $bereken = $getal1 * 2 + $getal2;
            echo "<h1>Uitkomst: $bereken</h1>";
        } else {
            $bereken = $getal2 * 2 + $getal1;
            echo "<h1>Uitkomst: $bereken</h1>";
        }
        
    ?>

</body>
</html>