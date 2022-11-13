# Twig

Twig ist für PHP eine Template-Engine, welche den Code noch schlichter und schneller zum Ziel führen soll, da PHP selbst doch sehr ausführlich wird. Vorallem wenn man ausgaben in HTML machen möchte.

<!-- tabs:start -->

## **Stärken**

- ``Schnell`` : Twig kompiliert Vorlagen zu einfachem, optimiertem PHP-Code. Der Overhead im Vergleich zu regulärem PHP-Code wurde auf ein Minimum reduziert.
- ``Sicher`` : Twig verfügt über einen Sandbox -Modus, um nicht vertrauenswürdigen Vorlagencode auszuwerten. Dadurch kann Twig als Vorlagensprache für Anwendungen verwendet werden, bei denen Benutzer das Vorlagendesign ändern können.
- ``Flexibel`` : Twig wird von einem flexiblen Lexer und Parser angetrieben . Dadurch kann der Entwickler seine eigenen benutzerdefinierten Tags und Filter definieren und seine eigene [DSL](https://de.wikipedia.org/wiki/Dom%C3%A4nenspezifische_Sprache) erstellen.  

## **Funktionen**

- Unterstützung von Kontrollfluss
- automatische Maskierung
- Vererbung von Vorlagen
- variable Filter
- Unterstützung für Internationalisierung mittels gettext
- Makros
- Erweiterbarkeit  

<!-- tabs:end -->

## Syntax

<!-- tabs:start -->

### **Ausgabe Variable**

```twig
<p>{{ variable }}</p>
```

### **Kommandos/Befehle**

```twig
{% set variable='Test'%}
<p>{{ variable }}</p>
```

![Ausgabe der Variable](../pics/twig.png)

### **Kommentare**

```twig
{# Das ist ein Kommentar und wird im HTML nicht Dargestellt #}
```

<!-- tabs:end -->

## Operatoren und Vorrang

Operator  |  Funktion
-------   |  --------
b-and   |   Konjunktion (logisch)
b-xor   |   Kontravalenz (logisch)
b-or    |   Disjunktion (logisch)
or  |   Disjunktion
and |   Konjunktion
==  |   Gleichheit
!=  |   Ungleichheit
<   |   kleiner als
**>**   |   größer als
**>=**  |   größer gleich
**<=**  |   kleiner gleich
**in**  |   innerhalb
**matches** |   korrespondiert
**starts with** |   beginnt mit
**ends with**   |   endet mit
**..**  |   Sequenz (z. B.: 1..5)
**+**   |   Plus
**-**   |   Minus
**~**   |   Verkettung
``*``   |   Multiplikation
**/**   |   Division
**//**  |   Division (abgerundet)
**%**   |   Modulo
**is**  |   Test (ex: ist definiert oder ist nicht leer)
``**``  |   Potenz
**|**   |   Filter[6]
**[]**  |   Datenfeld
**.**   |   Attribut oder Methode eines Objects (z. B.: land.name)

## Filter

Folgende Befehle können mit einer ``|`` (Pipe) hinzugefügt werden um bestimme funktionen auszuführen

Befehl | Funktion
-------|---------
capitalize: |   ändert das erste Zeichen einer Zeichenfolge in einen Großbuchstaben.
upper:  |   ändert alle Zeichen einer Zeichenfolge in Großbuchstaben.
first:  |   zeigt die erste Zeile eines Datenfeldes an.
length: |   gibt die Größe des Variablenwertes zurück.

## if Methode

Die **if**-M;ethode bei Twig ist ähnlich wie bei **PHP**. Damit kann überprüft werden ob eine Angabe zustimmt (``true``) oder nicht zustimmt (``false``). Dazu folgen gleich folgendes Beispiel.

### Beispiele

<!-- tabs:start -->

#### **Standard**

```twig

{% if online == flase %}
    <p>Unsere Webseite ist momentan nicht erreichbar<p>
{% endif %}
```

#### **Array empty check**

```twig

{% if users %}
    <ul>
        {% for user in users %}
            <li>{{ user.username}}</li>
        {% endfor %}
    </ul>
{% endif %}
```

<!-- tabs:end -->
