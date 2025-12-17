<?php

1
for ($i = 1; $i <= 10; $i++) {
    if ($i < 10) {
        echo $i . "-";
    } else {
        echo $i;
    }
}
?>

2
<!DOCTYPE html>
<html>
<head>
<style>
.even { background-color: lightblue; }
.odd { background-color: blue; color: white; }
</style>
</head>
<body>
<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "<div class='even'>$i</div>";
    } else {
        echo "<div class='odd'>$i</div>";
    }
}
?>
</body>
</html>


3
<?php
$sum = 0;
for ($i = 0; $i <= 30; $i++) {
    $sum += $i;
}
echo "Resultaat: " . $sum;
?>


4
<?php
for ($i = 99; $i > 50; $i--) {
    echo $i . "<br>";
}
?>


5
<?php
$text = "Mijn LOOP gaat deZe tekst met grote of KLEINE letters op het SCHERM tonen bij EVEN of onEVEN init-counTERS";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo strtoupper($text) . "<br>";
    } else {
        echo strtolower($text) . "<br>";
    }
}
?>


6
<?php
for ($i = 9; $i >= 1; $i--) {
    echo $i;
    if ($i > 1) {
        echo ".";
    }
}
?>


7
<?php
$total = 100;
for ($i = 10; $i >= 0; $i--) {
    $total -= $i;
    echo "Tussenstand: " . $total . "<br>";
}
echo "Nog over: " . $total;
?>