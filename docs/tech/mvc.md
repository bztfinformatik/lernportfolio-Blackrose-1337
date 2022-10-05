# MVC- Pattern

## Vorwort

MVC steht für **Model-View-Controller**. Die Idee kommt daher, dass man mehr Struktur in seinen Code bringen möchte. Dabei wird das Klassenstruktur auf drei Ebenen aufgeteilt.

<!-- tabs:start -->

### **Model**

- Definiert welche Informationen gespeichert werden können
- Repräsentiert eine logische Einheit (DB-Entität, OOP, Klasse)
- Enthält Plausibilitätskontrolle (sind die Daten korrekt?)
- Kann Datenbankverbindungen enthalten

```php
<?php
//$pdo enthält die Datenbankverbindung
 
class User {
   // Klasse zur Abbildung eurer Benutzer
   public static function newUser($email, $vorname, $nachname, $passwort) {
   }
 
   public static function findByEmail($email) {
   }
 
   public function delete() {
   }
 
   public function setPassword($newPassword) {
   }
}
 
class Product {
   // Klasse zur Darstellung von Produkten im Online-Shop ähnlich wie oben
   //...
}
 
class ProductOrder {
   // Klasse zur Darstellung neuer Produktbestellungen
   public function __constructor(User $user) {
   }
 
   public function addProduct(Product $product) {
   }
 
   public function addProductById($productId) {
   }
 
   public function buy() {
   } 
}
?>
```

### **View**

- Ist für die Darstellung von Informationen verantwortlich
- Stellt Model dar
- Enthält keine Logik
- Speichert keine Daten

```php
<?php
$max = User::findByEmail("max@muster.de");
 
$order = new ProductOrder($max);
$order->addProductById(23);
$order->addProductById(42);
 
if($order->buy()) {
   include("order-successful.view.php");
} else {
   include("order-failed.view.php");
}
?>
```

### **Controller**

- Ist die Verknüpfungsstelle für Model und View
- Üblich wird pro Model ein Controller erstellt
- Enthält Programmlogik
- Kann Datenbankverbindungen enthalten

```php
<?php
class UserController {
 public function registerNewUser($email, $password) {
 //Entsprechende Überprüfungen und SQL Queries zum Registrieren des Nutzers
 //Gibt z.B. true zurück, falls die Registrierung funktioniert hat
 }
 
 public function changeUserPassword(User $user, $new_password) {
 //Ändert das Benutzerpasswort für den Nutzer $user
 }
 
 public function sendNewPassword(User $user) {
 //Sendet dem Benutzer ein neues Passwort zu
 }
}
?>
```

<!-- tabs:end -->