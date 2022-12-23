# Sessions & Cookies

## Sessions

Sessions sind dazu da Information festzuhalten während einer andauernden aktiven Kommunikation (Sitzung) um diese zu authorisieren. Zum Beispiel ``userid``, ``username``, ``ip`` und ``Authorisierungsrolle``.
Session werden innerhalb einer Programmiersprache gespeichert auf der Seite des Servers (eigene generierte Datenbank namens Sessions).

```php
<?php
session_start();
?>
```

> [!Note]
> Aufruf der Session wird für jedes einzel erstellte PHP-Skript benötigt, wenn nicht objektorientiert gearbeitet wird.

## Cookies

Cookies können eine ähnliche Aufgabe erfüllen wie auch **Sessions**, doch können diese auch über **eine Sitzung** hinaus, auch wenn die Kommunikation unterbrochen wird noch beständig bleiben, dies wird mit der ``Lebenszeit`` im Cookie selbst definiert. Sobald diese abgelaufen ist, wird der Cookies gelöscht.

> [!Note]
> Cookies werden auch beim Besucher der Webseite Local gespeichert

### Cookie setzen

```php
<?php
setcookie("username","Max",0); 
?>
```

Die erste Angabe (username) ist der Name des Cookies, über die der Cookie später immer erreichbar ist. Die zweite Angabe ist der Wert, der nachher im Cookie gespeichert wird. In diesem Fall Max. Die dritte Stelle ist eine Zeitangabe, wie lange der Cookie gültig, d.h. auf dem Computer des Anwenders gespeichert wird.
