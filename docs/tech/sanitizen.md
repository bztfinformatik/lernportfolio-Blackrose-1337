# sanitizen von Daten

**Sanitize** steht für **bereinigen** oder auch **desinfizieren**. In der Informatik geht es wohl auch um das Selbige, wie im echt leben. Man will ``schmutz`` oder ``schädliche`` Daten ``eliminieren/entfernen``, um das eigenene System **sauber** zu halten. Im gegensatz zum validieren soll sanitizen zum Beispiel ungewollte Zeichen bei einer eingabe entfernen, damit diese zu keinen komblikationen führen kann auf dem System.

## Beispiel

**Bereinugung einer Mail-Adresse**: Im folgenden Beispiel wird die Funktion filter_var() verwendet, um alle alle unzulässigen Zeichen aus der Variable ``$email`` zu entfern.

<!-- tabs:start -->

### **CODE**

```php
<?php
$email = "stranger@gmail.co<m>";
$newmail= filer_var($email, FILTER_SANITIZE_EMAIL);
echo $newmail;
?>
```

### **Ausgabe**

```bash
stranger@gmail.com
```

<!-- tabs:end -->