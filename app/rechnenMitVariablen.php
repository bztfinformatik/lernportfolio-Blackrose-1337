<?php
echo "Variable mit Zahl <br />";

$zahl1 = 10;
$zahl2 = 5;
echo "Zahl1: $zahl1 <br />";
echo "Zahl2: $zahl2";

echo "<br /> <br />Zahl addieren <br />";

$zahl1 = 10;
$zahl2 = 5;
$ergebnis = $zahl1 + $zahl2;
echo "Ergebnis: $ergebnis";


echo "<br /> <br />Zahl addieren 2 <br />";


$zahl = 1;
$ergebnis = $zahl + 5;
echo $ergebnis;


echo "<br /><br /> Rechnenmethoden <br />";

$zahl1 = 10;
$zahl2 = 5;
echo $zahl1 + $zahl2; //addieren
echo "<br />";
echo $zahl1 - $zahl2; //subtrahieren
echo "<br />";
echo $zahl1 * $zahl2; //multiplizieren
echo "<br />";
echo $zahl1 / $zahl2; //dividieren
echo "<br />";
echo pow($zahl1,$zahl2); //Zahl1 hoch Zahl2 (10^5)
echo "<br />";
echo sqrt(64); // Wurzel von 64
echo "<br />";
echo 2*$zahl1 + 5*$zahl2 - 3; //Berechnet 2*10 + 5*5 - 3

?>