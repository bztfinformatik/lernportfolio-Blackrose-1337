# Rechnen mit Variablen

Wie auch in anderen Programmiersprachen werden beim Speichern von Zahlen keine **" "** verwendet, da sonst die Variable zu einem String wird statt eines int oder double und daher auch nicht rechnerisch verwendet werden können.

<!-- tabs:start -->

#### **Variable mit Zahl**

#### Code

```php
<?php
$zahl1 = 10;
$zahl2 = 5;
echo "Zahl1: $zahl1 <br />";
echo "Zahl2: $zahl2";
?>
```

#### Output:

```html
Zahl1: 10
Zahl2: 5
```

#### **Zahlen addieren**

#### Code

```php
<?php
$zahl1 = 10;
$zahl2 = 5;
$ergebnis = $zahl1 + $zahl2;
echo "Ergebnis: $ergebnis";
?>
```

#### Output:

```html
Ergebnis: 15
```  

#### **Zahlen addieren 2**

#### Code

```php
<?php
$zahl = 1;
$ergebnis = $zahl + 5;
echo $ergebnis;
?>
```

#### Output:

```html
6
```  

#### **Rechenmethoden**

#### Code

```php
<?php
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
```

#### Output:

```html
15  
5  
50  
2
100000
8  
42  
```

<!-- tabs:end -->