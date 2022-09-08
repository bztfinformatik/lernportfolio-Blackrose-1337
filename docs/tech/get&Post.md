# Get & Post

Die **Get & Post** Methode wird verwendet um Daten von einer API-Schnittstelle zur andern zu transferieren. Dies sollte durch das letze Semester und dem Projekt verständlich sein.

<!-- tabs:start -->

#### **Get**

Die **Get-Methode** übermittelt die Informationen direkt in der URL und sind daher auch direkt zu lesen. 
> [!NOTE]
> Dadurch ist der Inhalt direkt ersichtlich. Dies kann seine Vorteile haben aber kann genau so Sicherheitslücken offen lassen.

```url
Migrosbank.php?accountname=blackrose&password=cookies
```

#### **Post**

Die **Post-Methode** übermittelt die Informationen über eine Datei.  
> [!NOTE]
> Dadurch ist der Inhalt nicht direkt ersichtlich. Was für die Sicherheit wichtig ist aber die Datenverarbeitung erhöhen.

```XML
<form action="seite2.php" method="post">
Vorname: <input type="text" name="vorname" /><br />
Namename: <input type="text" name="nachname" /><br />
<input type="Submit" value="Absenden" />
</form>
```

```php
<?php
$vorname = $_POST["vorname"];
$nachname = $_POST["nachname"];
echo "Hallo $vorname $nachname";
?>
```

![Aufgabe Get & Post](../../pics/get_Post.png)  
![Aufgabe Get & Post](../../pics/get_Post1.png)

<!-- tabs:end -->