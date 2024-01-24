<?php
// Cookie voor paginabezoeken
if(isset($_COOKIE['page_visits'])) {
    $visits = $_COOKIE['page_visits'];
    $visits++;
} else {
    $visits = 1;
}

setcookie('page_visits', $visits, time() + 3600); // Cookie geldig voor een uur

echo "Aantal keer op deze pagina: " . $visits;


?>
?php>