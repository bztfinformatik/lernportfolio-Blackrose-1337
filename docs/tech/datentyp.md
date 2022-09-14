# Datentypen PHP

Selbst bei PHP gibt es Datentypen, selbst wenn PHP dies nicht direkt zeigt. PHP setzt im Hintergrund selbstständig Datentypen, obwohl dies selbst auch mal schnell zu Komplikationen führen kann. Daher ist es ratsam selbst immer Datentypen zu setzen und zu verwenden. Mit dem Befehl ``var_dump`` erhält man die Information zu einer abgespeicherten Variable, das heisst man erfährt den Inhalt und in welchem Datentyp dieser gespeichert wurde.

## Beispiel

<!-- tabs:start -->

#### **Code**

```php
<?php
$beispiel1 = '20';
$beispiel2 = (int)$beispiel1;
var_dump($beispiel1, $beispiel2);
?>
```

#### **Ausgabe**

```text
string(2) "20"
int(20)
```

> [!Note]
> Zu beachten ist beim ``String`` ist die Ziffer in der Klammer diese zeigt die Anzahl der Zeichen. Beim ``Int`` ist die Ziffer innerhalb der Klammer der gespeicherte Wert

<!-- tabs:end -->
