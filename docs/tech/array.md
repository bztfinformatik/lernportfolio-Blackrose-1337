# Arrays

<!-- tabs:start -->

#### **Generell**

Arrays können beliebig viele Werte gespeichert werden und wieder ausgegeben werden. Für einen bestimmten Wert des Arrays muss die richtige Indexstelle angeben werden.

```php
<?php
$wochentage = array("Sonntag","Montag","Dienstag",
"Mittwoch","Donnerstag","Freitag","Samstag");
echo $wochentage[1];
?>
```

#### **Assoziativ**

Bei diesem Verfahren wird dem Index des Arrays auch ein Key hinterlegt, welcher dazu dienen soll Werte, die man wiedergeben will, leichter abzurufen. Da der Zahlenindex ab einer gewissen Menge unübersichtlich wird, im Gegensatz zu einem Key-System, welches man sich selbst ausgedacht hat.

```php
<?php
$wochentage = array(
"so" => "Sonntag",
"mo" => "Montag",
"di" => "Dienstag",
"mi" => "Mittwoch",
"do" => "Donnerstag",
"fr" => "Freitag",
"sa" => "Samstag");

echo $wochentage["mo"];
?>
```

#### **Mehrdimensional**

Man kann Arrays auch verschachteln. Das soll heissen, dass ich in einem Array einen weiteren Array einbinden kann. Dies kann behilflich sein, wenn mehrere Werte zu einem selbigen Objekt gehören, aber dennoch voneinander abrufbar sein sollten.

```php
<?php
$mitarbeiter = array(
  array("Klaus", "Zabel"),
  array("Arnie", "Meier"),
  array("Willi", "Brand")
);

//Daten ausgeben
echo "Vorname: ".$mitarbeiter[0][0];
echo " Nachname: ".$mitarbeiter[0][1];
?>
```

<!-- tabs:end -->