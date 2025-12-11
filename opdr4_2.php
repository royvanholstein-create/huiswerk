<?php 

// Opdracht 1: 
4^5 echo pow(4, 5); echo 4 ** 5;

// Opdracht 2: 
wortel van 9 echo sqrt(9); 

// Opdracht 3: 
wortel(9)^3 echo pow(sqrt(9), 3);

// Opdracht 4: 

check groter of kleiner dan 25 $result = pow(sqrt(9), 3); if ($result > 25) { echo "Groter dan 25"; } else { echo "Kleiner dan 25"; } 

// Opdracht 5: 
langste zijde rechthoek echo sqrt(5**2 + 7**2); 

// Opdracht 6: 

positief verschil echo abs(12864 - 35); 

// Opdracht 7: 
willekeurig getal tussen kleinste en grootste resultaat $min = min(pow(4,5), sqrt(9), $result, sqrt(5**2+7**2), abs(12864-35)); $max = max(pow(4,5), sqrt(9), $result, sqrt(5**2+7**2), abs(12864-35)); echo rand($min, $max); 

// Opdracht 8: 
dobbelsteen ( echo rand(1, 6);

// Opdracht 9: 
omtrek cirkel $r = 5; echo 2 * pi() * $r;

// Opdracht 10: 
12 / 3 * 4 = 1 echo 12 / (3 * 4); 

// Opdracht 11: 
check of resultaat getal is $res = 12 / (3 * 4); if (is_numeric($res)) { echo "Het is een getal"; } else { echo "Het is geen getal"; } 

// Opdracht 12: 
willekeurig getal tussen jouw verwachte min en max cijfer $minCijfer = 4; $maxCijfer = 8; echo rand($minCijfer, $maxCijfer); ?>