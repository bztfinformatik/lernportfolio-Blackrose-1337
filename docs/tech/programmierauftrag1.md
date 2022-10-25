# Programmierauftrag 1

Das Ziel der Aufgabe war, dass ein gespeicherter Array in einer Tabelle ausgegeben wird. Ich habe im HTML bereich mit einem PHP Code in einer Schleife die Tabelle erstellen lassen.

<!-- tabs:start -->

## **Code**

```php
<?php
echo "Auftrag_1 <br /><br />";
$array = array(3,7,5,1,8,13,2);
?>

<table border="solid">
    <tbody>
    <?php 
        foreach ($array as $value) {
            echo "<tr>";
                echo "<td>". $value . "</td>";
            echo "</tr>";
        }
    ?>
    </tbody>
</table>
```

## **Ausgabe**

![PHP erstellte Tabelle in HTML](../../pics/auftrag1.png)

<!-- tabs:end -->