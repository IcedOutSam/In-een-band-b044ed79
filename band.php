<?php
$albums["Citizen of Glass"] = 4.50;
$albums["Night"] = 9.00;
$albums["New Eyes"] = 5.00;
$albums["Strange Trails"] = 10.00;

$count = count($albums);
$totaleprijs = 0;

echo "Het album overzicht:" . PHP_EOL;

foreach ($albums as $album => $prijs){
    $totaleprijs = $totaleprijs + $prijs;
    echo $album . ": " . $prijs . PHP_EOL;
}

echo "Totale prijs: " . $totaleprijs . PHP_EOL;
echo "gemiddelde: " . round($totaleprijs / $count, 2);

 ?>
