<?php

// Opdracht 1

echo "1: " . (11.456 / 3.13) . "<br>";


// Opdracht 2

$result = 11.456 / 3.13;

$decimalen = strlen(substr(strrchr($result, "."), 1));

echo "2: aantal decimalen = " . $decimalen . "<br>";


// Opdracht 3

echo "3: " . (2/3) . " (PHP geeft een benadering)<br>";


// Opdracht 4

$var1 = 2.9e4;

echo "4: " . $var1 . " (type float)<br>";


// Opdracht 5

$var2 = 2.4e-3;

echo "5: " . $var2 . " (type float)<br>";


// Opdracht 6

echo "6: " . pow(11,111) . "<br>";


// Opdracht 7

echo "7: Waarschijnlijk CPU (grote berekening)<br>";


// Opdracht 8

echo "8: 12+5 = " . (12+5) . " (CPU)<br>";


// Opdracht 9

echo "9: 12.001+5 = " . (12.001+5) . " (FPU)<br>";


// Opdracht 10

$a = "5e4e3e2e1";

$b = 2;

echo "10: " . ($a * $b) . " (PHP zet string om naar 0)<br>";


// Opdracht 11

echo "11: variabele a = string, variabele b = integer<br>";

?>