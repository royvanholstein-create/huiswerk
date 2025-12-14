<?php

// Opdracht 1
$cijfer = rand(0,11);
if($cijfer >= 5.5){
    echo "Voldoende: $cijfer<br>";
} else {
    echo "Onvoldoende: $cijfer<br>";
}

// Opdracht 2
$cijfer = rand(0,11);
if($cijfer <= 5.5){
    echo "Cijfer tussen 0 en 5.5: $cijfer<br>";
} else {
    echo "Cijfer NIET tussen 0 en 5.5: $cijfer<br>";
}

// Opdracht 3
$cijfer = rand(0,11);
if($cijfer > 8 || $cijfer < 2){
    echo "Groter dan 8 of kleiner dan 2: $cijfer<br>";
} else {
    echo "Niet groter dan 8 en niet kleiner dan 2: $cijfer<br>";
}

// Opdracht 4
$cijfer = rand(0,11);
if($cijfer < 2){
    echo "Erg slecht: $cijfer<br>";
} elseif($cijfer < 4){
    echo "Slecht: $cijfer<br>";
} elseif($cijfer < 6){
    echo "Matig: $cijfer<br>";
} elseif($cijfer < 8){
    echo "Voldoende: $cijfer<br>";
} elseif($cijfer < 10){
    echo "Goed: $cijfer<br>";
} else {
    echo "Perfect: $cijfer<br>";
}

// Opdracht 5
$a = 1;
$b = "1";
if($a == $b){
    echo "Waarde gelijk<br>";
} else {
    echo "Waarde niet gelijk<br>";
}

// Opdracht 6
if($a === $b){
    echo "Waarde identiek<br>";
} else {
    echo "Waarde niet identiek<br>";
}

// Opdracht 7
echo "Hoofdstuk 14: beschrijf wat er NIET goed is volgens meneer De Boer.<br>";

// Opdracht 8
$dag = date("N"); // 6 = zaterdag, 7 = zondag
if($dag == 6 || $dag == 7){
    echo "Het is weekend<br>";
} else {
    echo "Het is geen weekend<br>";
}

// Opdracht 9
echo "Lever dit bestand in op ELO.<br>";
?>

