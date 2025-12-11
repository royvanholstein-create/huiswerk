<?php
// Opdracht 1
$a = 33.45789;
echo round($a) . "<br>";

// Opdracht 2
echo "€ " . number_format($a, 2, ",", ".") . "<br>";

// Opdracht 3
echo floor($a) . "<br>";

// Opdracht 4
echo ceil($a) . "<br>";

// Opdracht 5
echo intval("1e34er") . "<br>";

// Opdracht 6
$b = "4.1285e2entwintig";
echo intval($b) . "<br>";

// Opdracht 7
echo floatval($b) . "<br>";

// Opdracht 8
echo intval(floatval($b)) . "<br>";

// Opdracht 9
$c = 9.867e-5;
echo "€ " . number_format($c, 10, ",", ".") . "<br>";

// Opdracht 10
if (is_numeric($a)) {
    echo "Dit is een getal<br>";
} else {
    echo "Dit is geen getal<br>";
}

// Opdracht 11
if (is_numeric($b)) {
    echo "Dit is een getal<br>";
} else {
    echo "Dit is geen getal<br>";
}

// Opdracht 12
if (is_numeric($c)) {
    echo "Dit is een getal<br>";
} else {
    echo "Dit is geen getal<br>";
}
?>