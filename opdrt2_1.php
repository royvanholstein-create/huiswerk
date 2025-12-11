<?php

// Opdracht 1

$sentence = "Deze zin bevat karakters.";

echo strlen($sentence);


// Opdracht 2

echo strlen(1337);


// Opdracht 3

$name = "Roy";

echo strlen($name);


// Opdracht 4

$city = "Wommels";

echo strlen($city);


// Opdracht 5

$text1 = "Er staan te veel spaties hier ";

echo trim($text1);


// Opdracht 6

$text2 = " Er staan teveel spaties vooraan";

echo trim($text2);


// Opdracht 7

echo strlen($text1);

echo strlen(trim($text1));


// Opdracht 8

echo strlen($text2);

echo strlen(trim($text2));


// Opdracht 9

$len1 = strlen($text1);

$len1trim = strlen(trim($text1));

echo "Er zijn " . ($len1 - $len1trim) . " overtollige spaties verwijderd";


$len2 = strlen($text2);

$len2trim = strlen(trim($text2));

echo "Er zijn " . ($len2 - $len2trim) . " overtollige spaties verwijderd";


// Opdracht 10

echo ucfirst(strtolower(trim($text1)));

echo ucfirst(strtolower(trim($text2)));


// Opdracht 11

echo strtoupper($text1);

echo strtoupper($text2);


// Opdracht 12

$zin = "Dit gebouw is 5 meter hoog en de ramen zijn rood met blauwe randjes.";

echo str_replace(

["gebouw","5","rood","blauwe","randjes"],

["huis","6","groen","grijze","randjes"],

$zin
);
