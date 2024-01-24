<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Opdracht_7.4</title>
</head>
<body>
    <form method="post">
        <label class="prijs-label">Prijs</label>
        <input type="text" name="prijs">
        <br>

        <label>Korting (%)</label>
        <input type="text" name="korting">
        <br><br>

        <input type="submit" name="omzetten" value="Uitrekenen">
        <br><br>
    </form>

    <?php
    // junior
        
        if (isset($_POST['omzetten'])) {

            $prijs = $_POST['prijs'];
            $korting = $_POST['korting'];
        
            if (isset($_POST['prijs']) && isset($_POST['korting'])) {
        
                global $prijs;
                global $korting;

                if ($_POST['omzetten']) {

                    $stap1 = $prijs / 100;
                    $stap2 = $stap1 * $korting;
                    $bereken = $prijs - $stap2;

                    echo "Bedrag inclusief " . $korting . "% korting: " . number_format($bereken,2);

                }
        
            }
        
        }

    ?>
</body>
</html>