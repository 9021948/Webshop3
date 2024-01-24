<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht_7.3</title>
</head>
<body>
    <form method="post">

        <input type="radio" name="kleuren" value="rood"> Rood
        <input type="radio" name="kleuren" value="groen"> Groen
        <input type="radio" name="kleuren" value="blauw"> Blauw
        <input type="radio" name="kleuren" value="roze"> Roze
        <br><br>

        <input type="submit" name="omzetten" value="Instellen">
        <br><br>
        
    </form>

    <?php
    // junior

        if (isset($_POST['omzetten'])){

            if (isset($_POST['kleuren'])){
                
                if ($_POST['kleuren'] == "rood") {
                    echo '<body style="background-color:red">';
                } 
                if ($_POST['kleuren'] == "groen") {
                    echo '<body style="background-color:green">';
                } 
                if ($_POST['kleuren'] == "blauw") {
                    echo '<body style="background-color:blue">';
                } 
                if ($_POST['kleuren'] == "roze") {
                    echo '<body style="background-color:pink">';
                } 

            }
            

        }
    ?>

</body>
</html>