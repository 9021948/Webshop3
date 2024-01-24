<?php
// junior nahayo

if ($aantalElementen === 0) {
  return "De array is leeg. Gemiddelde.";
}
function BepaalGemiddelde($array) {
    $aantalElementen = count($array);

$totaal = array_sum($array);
 $gemiddelde = $totaal / $aantalElementen;
  return $gemiddelde;
}
$cijfers = array(33, 44, 33);
$gemiddelde = BepaalGemiddelde($cijfers);
echo $gemiddeld;
?>
