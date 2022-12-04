# Sessions & Cookies

## Sessions

Session werden innerhalb einer Programmiersprache gespeichert auf der Seite des Servers (eigene generiete Datenbank names Seassions).

```php
<?php
session_start();
?>
```

Aufruf der Seassion wird für jedes einzel erstellte PHP-Skript benötigt, wenn nicht objektorientiert gearbeitet wird.

## Cookies

- cookies werden beim Besucher der Webseite Local gespeichert

### Cookie setzen

```php
<?php
setcookie("username","Max",0); 
?>
```

Die erste Angabe (username) ist der Name des Cookies, über die der Cookie später immer erreichbar ist. Die zweite Angabe ist der Wert, der nachher im Cookie gespeichert wird. In diesem Fall Max. Die dritte Stelle ist eine Zeitangabe, wie lange der Cookie gültig, d.h. auf dem Computer des Anwenders gespeichert wird.
