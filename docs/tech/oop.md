# Objektorientiert

Objektorientiertes beinhaltet Klassen und Objekte. Jeweilis instanzierte Objekte basieren auf einer Klasse, man kann es auch so sehen als wär die Klasse ein Schema für ein Schwert zum Beispiel. So kann man viele Objekte auf der selben Klasse instazieren mit zwar den selbigen Variablen aber unterschiedlichen Werten und diese auch einzeln abrufen bearbeiten/verwenden.

1. Wie wird in PHP instanziert?  
   a. $beispiel = new object()
  
2. Was bedeutet der Pfeil?  
   a. Der ``Pfeil`` verweist auf ein bestimmtes ``Attribut`` des ``Objekts``, welches ***in der Klasse definiert*** wurde.  
   b. Der ``Pfeil`` kann auch verwendet werdem um ``Methoden`` eines Objekts aufrufen.  
  
3. Was bedeutet $this?  
   a. ``$this`` bezieht sich auf die ***Elemente(Attribute) innerhalb der Klasse/Objekt*** nicht auf die Variable welche von ausserhalb kommt. Es bezieht sich also immer auf das ``eigene Objekt`` indem es sich befindet.

4. Welche Möglichkeiten an Zugriffsmodifizierer kennt PHP?  
   a. ``public``: Public bedeutet Vollzugriff, jeder kann auf diese Variable oder Methode zugreifen.  
   b. ``protected``: Auf die Variable oder Methode kann nur innerhalb der Klasse und in vererbten Klassen zugegriffen werden.  
   c. ``private``: Der restriktivste Typ. Nur innerhalb der Klasse kann auf solche Variablen und Methoden zugegriffen werden.  
