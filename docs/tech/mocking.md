# Mocking von Daten

**Mock** steht im englischen **nachgemacht** oder eben in der IT eben **Nachbildung** oder **Imitation** von etwas zu machen. Mit Mocking-Daten will man Daten bereit stellen um Actionen zu prüfen die auf solche nachgebildeten Daten zugreifen. Man weiss, wie Daten erwartet werden nur besteht die Struktur noch nicht um diese so Darzustellen. Deshalb wird Mocking verwendet, damit man aber schon an der Funktion arbeiten kann, welches diese Datenart verwenden werden.

Beim **Unit Testing** wollen wir **Methoden** einer Klasse ``isoliert`` testen. Aber Klassen sind nicht isoliert. Sie verwenden Dienste und Methoden aus anderen Klassen. In dieser Situation **mocken** wir also die Dienste und Methoden aus anderen Klassen und ``simulieren`` ihr reales Verhalten mit dem verwenden dieser **gemockten Methoden und Daten**, um ``isolierte Einzeltests`` durchzuführen.

## Beispiel

<!-- tabs:start -->

### **CODE**

```php
<?php

class ModelBase
{
    private int $id;

    protected function getFakeId()
    {
        return rand(0, 200);
    }
}

class ModelTeilnehmende extends ModelBase
{
    // Alle Attribute des Models
    private string $name;
    private string $surname;
    private string $role;
    private string $email;
    private string $land;
    private int $plz;
    private string $ortschaft;
    private string $strasse;
    private int $strNr;
    private int $tel;
    private int $pwId;
    private int $saltId;

    public function getFakeDataUser()
    {
        $data = [
            ['id' => $this->getFakeId(), 'name' => 'Peter', 'surname' => 'Laucher', 'role' => 'jury', 'email' => 'test1@test.ch', 'land' => 'DE', 'plz' => 84669, 'ortschaft' => 'rostock', 'strasse' => 'Lauerstr.', 'strNr' => 23, 'tel' => 4465155, 'textid' => 12, 'pwId' => 32, 'saltId' => 20],
            ['id' => $this->getFakeId(), 'name' => 'Ricarda', 'surname' => 'Murer', 'role' => 'teilnehmende', 'email' => 'test1@test.ch', 'land' => 'DE', 'plz' => 84669, 'ortschaft' => 'rostock', 'strasse' => 'Lauerstr.', 'strNr' => 12, 'tel' => 4465155, 'textid' => 13, 'pwId' => 12, 'saltId' => 2],
            ['id' => $this->getFakeId(), 'name' => 'Philippe', 'surname' => 'Egger', 'role' => 'teilnehmende', 'email' => 'test1@test.ch', 'land' => 'DE', 'plz' => 84669, 'ortschaft' => 'rostock', 'strasse' => 'Lauerstr.', 'strNr' => 3, 'tel' => 4465155, 'textid' => 14, 'pwId' => 2, 'saltId' => 12],
            ['id' => $this->getFakeId(), 'name' => 'Joel', 'surname' => 'Packer', 'role' => 'teilnehmende', 'email' => 'test1@test.ch', 'land' => 'DE', 'plz' => 84669, 'ortschaft' => 'rostock', 'strasse' => 'Lauerstr.', 'strNr' => 213, 'tel' => 4465155, 'textid' => 15, 'pwId' => 3, 'saltId' => 3],
            ['id' => $this->getFakeId(), 'name' => 'Claudia', 'surname' => 'Schlirrer', 'role' => 'jury', 'email' => 'test1@test.ch', 'land' => 'DE', 'plz' => 84669, 'ortschaft' => 'rostock', 'strasse' => 'Lauerstr.', 'strNr' => 200, 'tel' => 4465155, 'textid' => 16, 'pwId' => 7, 'saltId' => 4],
        ];
        return $data;
    }
}
class UserController 
{
    puplic function callMockingdata()
    {
        $usermodel = new ModelTeilnehmende();
        $arr = $usermodel->getFakeDataUser();
        $responseData = json_encode($arr);
        echo $responseData;
    }
    
}

```

### **Ausgabe**

```bash
[
    {
        "id": 12,
        "name": "Peter",
        "surname": "Laucher",
        "role": "jury",
        "email": "test1@test.ch",
        "land": "DE",
        "plz": 84669,
        "ortschaft": "rostock",
        "strasse": "Lauerstr.",
        "strNr": 23,
        "tel": 4465155,
        "textid": 12,
        "pwId": 32,
        "saltId": 20
    },
    {
        "id": 174,
        "name": "Ricarda",
        "surname": "Murer",
        "role": "teilnehmende",
        "email": "test1@test.ch",
        "land": "DE",
        "plz": 84669,
        "ortschaft": "rostock",
        "strasse": "Lauerstr.",
        "strNr": 12,
        "tel": 4465155,
        "textid": 13,
        "pwId": 12,
        "saltId": 2
    },
    {
        "id": 68,
        "name": "Philippe",
        "surname": "Egger",
        "role": "teilnehmende",
        "email": "test1@test.ch",
        "land": "DE",
        "plz": 84669,
        "ortschaft": "rostock",
        "strasse": "Lauerstr.",
        "strNr": 3,
        "tel": 4465155,
        "textid": 14,
        "pwId": 2,
        "saltId": 12
    },
    {
        "id": 94,
        "name": "Joel",
        "surname": "Packer",
        "role": "teilnehmende",
        "email": "test1@test.ch",
        "land": "DE",
        "plz": 84669,
        "ortschaft": "rostock",
        "strasse": "Lauerstr.",
        "strNr": 213,
        "tel": 4465155,
        "textid": 15,
        "pwId": 3,
        "saltId": 3
    },
    {
        "id": 33,
        "name": "Claudia",
        "surname": "Schlirrer",
        "role": "jury",
        "email": "test1@test.ch",
        "land": "DE",
        "plz": 84669,
        "ortschaft": "rostock",
        "strasse": "Lauerstr.",
        "strNr": 200,
        "tel": 4465155,
        "textid": 16,
        "pwId": 7,
        "saltId": 4
    }
]
```

<!-- tabs:end -->