<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht_7.2</title>
</head>
<body>
    <form method="post">
        <label>Getal 1</label>
        <input type="number" name="getal1">
        <br><br>

        <input type="radio" name="som" value="optellen"> Optellen
        <input type="radio" name="som" value="aftrekken"> Aftrekken
        <input type="radio" name="som" value="vermenigvuldigen"> Vermenigvuldigen
        <input type="radio" name="som" value="delen"> Delen
        <br><br>

        <label>Getal 2</label>
        <input type="number" name="getal2">
        <br><br>

        <input type="submit" name="omzetten" value="Berekenen">
        <br><br>
    </form>

    <?php
           // junior 
        if (isset($_POST['omzetten'])){

            $getal1 = $_POST['getal1'];
            $getal2 = $_POST['getal2'];

            if (isset($_POST['getal1']) && isset($_POST['getal2']) && isset($_POST['som'])){
                
                if ($_POST['som'] == "optellen") {

                    global $getaal1;
                    global $getal2;

                    $bereken = $getal1 + $getal2;

                    echo $getal1 . " + " . $getal2 . " = " . $bereken;

                } elseif ($_POST['som'] == "aftrekken") {

                    global $getaal1;
                    global $getal2;

                    $bereken = $getal1 - $getal2;

                    echo $getal1 . " - " . $getal2 . " = " . $bereken;

                } elseif ($_POST['som'] == "vermenigvuldigen") {

                    global $getaal1;
                    global $getal2;

                    $bereken = $getal1 * $getal2;

                    echo $getal1 . " x " . $getal2 . " = " . $bereken;

                } elseif ($_POST['som'] == "delen") {

                    global $getaal1;
                    global $getal2;

                    $bereken = $getal1 / $getal2;

                    echo $getal1 . " / " . $getal2 . " = " . $bereken;

                }

            }
            

        }

    ?>
</body>
</html>