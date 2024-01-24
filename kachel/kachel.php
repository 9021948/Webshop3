<?php 
     // auteur: wigmans
     // fucntie: zet de kachel aan

     // temp -10 - 0 graden: kachel hoge stand 
     // tepm 0 -18: kachel normale stand
     // temp > 18: kachel uit


    // initialisatie van de tempartuur
    $temp = -7;

    if ($temp <= 0 && $temp >= -10 ) {
        echo "hoges stand";
    }


?>