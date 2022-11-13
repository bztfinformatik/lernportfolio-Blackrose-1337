# Dokumentation Abgabe 2

## Erkenntnisse

- Ich habe gelernt wie ich mir meine eigene ansprechbare ``API`` mit PHP gestalte und die unterschiedlichen Abrufe weiterleite an andere **Controller**. Dazu habe ich auch die Annahme der Daten, sei es von ``Parametern`` oder ein``JSON`` gelernt.
- Ich habe festgestellt, dass eine Libary von Vue für ``POST`` fehlende Daten hatte. Dies führte dazu, dass mein Backend den **POST** nicht akzeptierte. Somit musste ich diese Parameter selbst in dem Objekt definieren.
- Ich habe gelernt wie ich ``base64`` Bilder darstellen kann im **Frontend**
- Ich kann ``Mocking-Daten`` vom **Backend** laden
- Ich kann Daten ans **Backend** übermitteln und erhalte eine Reaktion, wenn es geklappt hat oder auch etwas schieflief
- Ich hab hart **realisiert** wie gross das Projekt ist, an dem ich arbeite.

## Reflexion

Ich hab sehr viel Zeit dafür gebraucht, gewisse Abläufe kennenzulernen, wie setze ich etwas um. Sobald ich es verstanden habe, geht es ziemlich schnell die Sachen auszuarbeiten. Ich habe jedenfalls festgestellt, dass mir oft die Erfahrung in gewissen Sachen fehlen und dann ins tüfteln gerate. Öfters sollte ich einfach auch mal ein Beispiel durcharbeiten, auch wenn es noch nicht zu meinem Projekt passt. Doch so komme ich eher zu dem Punkt, wo ich es verstehe und auf mein Projekt anwenden kann. Ein gutes Beispiel war das Einrichten meiner API.
Ich habe festgestellt, dass ich im Frontend eine Base an den Elementen, die ich darstellen will, schnell erreicht habe. Doch auch da gab es einige neue Elemente, die mir ein Bein gestellt haben und viel Zeit und Geduld beansprucht haben, um dies dann doch noch umgesetzt zu kriegen.

## Stand

Ich konnte leider noch nicht die Bilder die ins Frontend lade nehmen und zu base64 umwandeln um ans Backend zu senden. Daher sind diese funktionale Anforderungen verschoben.

| ID    | Funktionale Anforderung      | ID-UseCase  | Auslöser | Beschreibung   | Akteur | Erledigt |
|-------|------------------------------|-------------|----------|----------------|--------|----------|
| FA01 | **Aufruf Formular** | **UC01** | Aufruf der Seite | Bein Aufruf der Wettbewerbseite wird ein leeres Formular dargestellt. | Teilnehmende |[x]|
| FA02 | **Bildupload** | **UC01** | Klick auf Button durchsuchen / optional: Drag and Drop | Bilder wird hochgeladen um vom Frontend zu Base64 umkoodiert um es später zu versenden | Teilnehmende |
| FA03 | **Teilnahme Wettbewerb** | **UC01** | Button Senden | Die Daten welche im Formular festgehalten wurden und die umkoodierten Bilder werden ans Backend-API gesendet. Das Backend koodiert Den Base64 code wieder zu Bilder um legt ein neues Verzeichniss an indem die Bilder gespeichert werden, der Pfad zu den Bildern wird in der Datenbank gespeichert. Alle anderen Informationen werden benfalls sauber auf der Datenbank hinterlegt. Auf die E-mail wird eine Verifizierung-Mail entsendet mit automatisch generiertem Login (E-mail/Passwort) wie auch zugleich eine Informationsmail an den Admin | Teilnehmende |[x]|
| FA04 | **Optional: Aufruf Projekt** | **UC02** | Login auf der Webseite als Teilnehmende/r | Nach dem Einlogen, wird das Projekt des Teilnehmers vom Backend angefoddert. Das Backend holt sich die Daten von der Datenbank schreibt die Bilder zu Base64 um und versendet diese an die Frontend-API. Frontend schreibt das Base64 um und gibt die Daten wieder in einer GUI aus. | Teilnehmende |
| FA05 | **Jury-Konto anlegen** | **UC03** | E-mail von künftigem Jurymitglied wird eingegben evtl. noch weitere Informationen und button hinzufüügen wird geklickt | Frontend überprüft ob alle nötigen Daten angeben wurden, falls ja werden die Informationen ans Backend versendet. Das Backend hinterlegt das Mitglied auf der Datenbank und generiert ein Passwort, welches per Mail an die Jury versendet wird. Falls Informationen fehlen wird dies in der GUI Angezeigt um den Akteuer zu informaieren. | Admin |[x]|
| FA06 |  **Passwortreset** | **UC05** | Admin drückt Button ``Passwort zurücksetzen`` | Es wird vom Frontend ein Fenster aufgerufen, wobei der Vorgang nochmal bestätigt werden muss. Wenn der Admin bestätigt wird das Backend-API angesprochen zum reset. Das Backend überprüft ob jemand mit der Adminrolle dies ausführt. Wenn es zutrifft wird der User von der Datenbank rausgesucht und das hinterlegte Passwort gelöscht, daraufhin generiert das Backend ein neues Passwort speichert dieses ab und sendet dieses per Mail an den entsprechenden User. | Admin |[x]|
| FA07 | **Änderungen Speichern** | **UC06** | Admin drückt auf ``Speichern`` | Das Projekt mit seinen Änderungen wird genommen und an das Backend versendet. Das Backend überschreibt das entsprechende Projekt falls Werte sich geändert haben mit den Änderungen | Admin |[x]|
