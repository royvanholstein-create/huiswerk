<?php
$zin = "The quick brOwn foX jumps OVER the lAzY Dog.";

echo strtoupper($zin);


//2


echo strtolower($zin);


//3


echo ucfirst(strtolower($zin));


//4


echo ucwords(strtolower($zin));


//5


echo strpos($zin, "jumps");


//6


$zin2 = "De school is begonnen";

echo substr_replace($zin2, "leuke ", 3, 0);


//7


$school = "roc friese poort";

echo ucwords($school);


//8


$zin = "The quick brOwn foX jumps OVER the lAzY Dog.";

$zin = strtolower($zin);

$zin = str_replace("quick ", "", $zin);

echo $zin;


//9

$start = strpos($zin, "fox");

echo substr($zin, $start, 10);