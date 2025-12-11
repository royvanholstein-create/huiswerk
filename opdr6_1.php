<?php
// Opdracht 4
$verjaardag = strtotime("10 July " . date("Y"));
$nu = time();
if ($verjaardag < $nu) {
    $verjaardag = strtotime("10 July " . (date("Y") + 1));
}
$dagen = ($verjaardag - $nu) / 86400;
echo "Het is nog " . round($dagen) . " dagen tot je verjaardag!<br>";

// Opdracht 5
$timestamp = strtotime("10 October 2016");
echo $timestamp . "<br>";

// Opdracht 6
echo date("d/m/Y", $timestamp) . "<br>";

// Opdracht 7
date_default_timezone_set("Australia/Melbourne");
echo date("d-m-Y H:i:s") . "<br>";

// Opdracht 8
date_default_timezone_set("Europe/Amsterdam");
echo date("d-m-Y H:i:s") . "<br>";

// Opdracht 9
if (date("l") == "Monday") {
    echo "Het is maandag<br>";
} else {
    echo "Het is geen maandag<br>";
}
?>