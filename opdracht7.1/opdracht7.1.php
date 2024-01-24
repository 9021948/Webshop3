<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht_7.1</title>
</head>
<body>
    <form method="post">
        <label>Bedrag exclusief BTW</label>
        <input type="number" name="bedrag">
        <br><br>
        <input type="radio" name="BTW" value="negen"> Laag 9%
        <br>
        <input type="radio" name="BTW" value="eenentwintig"> Hoog 21%
        <br><br>
        <input type="submit" name="omzetten" value="Uitrekenen">
        <br><br>
    </form>

    <?php
    // junior
        
        if (isset($_POST['omzetten'])) {
            $getal = $_POST['bedrag'];
        
            if (isset($_POST['bedrag']) && strlen($_POST['bedrag']) > 0 && filter_var($_POST['bedrag'], FILTER_VALIDATE_FLOAT) && isset($_POST['BTW'])) {
        
                global $negen;
                global $eenentwintig;
        
                if ($_POST['BTW'] == "negen") {

                    $stap1 = $getal / 100;
                    $stap2 = $stap1 * 9;
                    $bereken = $getal + $stap2;

                    echo "Bedrag inclusief 9 BTW: €" . number_format($bereken,2);

                } elseif ($_POST['BTW'] == "eenentwintig") {

                    $stap1 = $getal / 100;
                    $stap2 = $stap1 * 21;
                    $bereken = $getal + $stap2;

                    echo "Bedrag inclusief 21 BTW: €" . number_format($bereken,2);
                }
        
            }
        
        }

    ?>
</body>
</html>