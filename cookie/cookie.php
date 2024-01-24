<?php 
// junior
// funtie uiotleg cpookie

// is dit de eerste keer
if (isset($_COOKIE['teller']) == false){
    //cookie bestaat niet
    echo "cookie bestaat NIET<br>";
    setcookie('teller', 0 );
    
    
} else{
    echo "cookie bestaat<br>";

    // teller ophogen met 1
    $_COOKIE['teller'] ++;
    // verander de waarde de cookie
    setcookie ('teller' , $_COOKIE['teller'] );
}

echo $_COOKIE ['teller'];
?>