<?php
// Opdracht 1
echo "@ " . date("Y") . " ROC Friese Poort<br>";

// Opdracht 2
echo date("d-m-Y") . "<br>";

// Opdracht 3
echo date("j F Y") . "<br>";

// Opdracht 4
echo date("d/m/Y") . "<br>";

// Opdracht 5
echo date("l j F Y") . "<br>";

// Opdracht 6
echo date("D j M Y") . "<br>";

// Opdracht 7
echo date("d/m/Y") . "<br>";

// Opdracht 8
echo date("W") . "<br>";

// Opdracht 9
echo (time() - strtotime("1 January " . date("Y"))) / 86400 . "<br>";

// Opdracht 10
$jaar = date("Y");
if (($jaar % 4 == 0 && $jaar % 100 != 0) || ($jaar % 400 == 0)) {
    echo $jaar . " is een schrikkeljaar<br>";
} else {
    echo $jaar . " is geen schrikkeljaar<br>";
}

// Opdracht 11
echo date("y") . "<br>";

// Opdracht 12
echo "h = " . date("h") . " (12-uurs)<br>";
echo "g = " . date("g") . " (12-uurs zonder nul)<br>";
?>