<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Opdracht_4.4</title>
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
        
        echo "<h1>Opdracht 4.4</h1>";
        echo "<br>";

        $prijs = 55;

        if ($prijs >= 150) {
            $bereken = ($prijs / 100) * 19;
            $total = $prijs + $bereken;
            echo "<p>Oude prijs: € $prijs. Na verhoging van 19% is de prijs: € $total</p>";
        } elseif ($prijs <= 55) {
            $bereken = ($prijs / 100) * 11;
            $total = $prijs + $bereken;
            echo "<p>Oude prijs: € $prijs. Na verhoging van 11% is de prijs: € $total</p>";
        } else {
            $bereken = ($prijs / 100) * 16;
            $total = $prijs + $bereken;
            echo "<p>Oude prijs: € $prijs. Na verhoging van 16% is de prijs: € $total</p>";
        }
        
    ?>

</body>
</html>