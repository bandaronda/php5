<?php

// opdracht 1

$currentTime = date("H:i"); 

if ($currentTime < "12:00") {
    echo "Goedemorgen";

} elseif ($currentTime >= "12:00" && $currentTime < "18:00") {
    echo "Goedemiddag";

} else {
    echo "Goedenavond";
}
?>

<br>
<?php
//opdracht 2
function berekenGemiddelde($getal1, $getal2)
 {
    $gemiddelde = ($getal1 + $getal2) / 2;
    echo "Het gemiddelde is: " . $gemiddelde;
}


$getal1 = 10;
$getal2 = 20;


berekenGemiddelde($getal1, $getal2);
?>
<br>
<?php
//opdracht 3
function dagenTotEindeJaar() {

    $huidigeDatum = date("Y-m-d"); 

    $eindeJaar = date("Y-12-31"); 

    $verschil = strtotime($eindeJaar) - strtotime($huidigeDatum); 

    $dagenOver = ceil($verschil / (60 * 60 * 24)); 

    return $dagenOver;
}


$aantalDagen = dagenTotEindeJaar();
echo "Aantal dagen tot het eind van het jaar: $aantalDagen";
?>
<br>


<?php
//opdracht 4
function berekenTotaleLengte($strings)
 {
    $totaleLengte = 0;

    foreach ($strings as $string) {
        $lengte = strlen($string); 

        $totaleLengte += $lengte; 
    }
    return $totaleLengte;
}


$array = ["Hello", "master", "this", "is", "PHP"];

$totaleLengte = berekenTotaleLengte($array);

echo "Totale lengte van de strings: $totaleLengte";
?>