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
        echo "<h1>Opdracht 4.1</h1>";
        echo "<br>";

        $tijd = date('H') && date('i');

            if ($tijd >= 6 && $tijd <= 11.59) {
                echo "<h1>Het is Ochtend.</h1>";
            } elseif ($tijd >= 12 && $tijd <= 17.59) {
                echo "<h1>Het is Middag.</h1>";
            } elseif ($tijd >= 18 && $tijd <= 23.59) {
                echo "<h1>Het is Avond.</h1>";
            } elseif ($tijd >= 24 && $tijd <= 5.59) {
                echo "<h1>Het is Nacht.</h1>";
            } else {
                echo "<h1>Error</h1>";
            }

    ?>

</body>
</html>