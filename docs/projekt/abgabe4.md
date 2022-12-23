# Dokumentation Abgabe 4

## Erkenntnisse

- Ich habe gelernt, wie ich ein Token vom Frontend im Header implementiere und diesen im Backend auslesen kann und damit arbeiten.
- Ich habe gelernt, wie ich im Frontend wie auch im Backend Sessions und Cookies definieren und setzen kann. (Backend noch Problem Sessions beständig zu halten)
- Ich habe das Prinzip von Sessions und Cookies verstanden.
- Ich habe gelernt wie ich ``Images`` in ``base64`` konvertiere, um diese dann als JSON zu versenden.

## Reflexion

Nach wie vor ist es immer noch ein grosses Projekt an dem ich auch nach dieser Abgabe noch weiter arbeiten werden, um es dem Kundenwunsch entsprechend fertig zu stellen. Ich konnte einiges lernen bezüglich Sessions und Cookies, wie ich mit diesen zu arbeiten habe und wie gross der Aufwand dafür ist, wenn kein Framework diesen Part für einen übernimmt.
Ich werde bei diesem Projekt laut Kunde einfach die Mailfunktion von PHP selbst verwenden können, da der Server dementsprechend eingerichtet ist.
Ich muss noch das Problem lösen mit den Sessions, dass PHP die Sessions nicht verliert und immer eine neue starten muss.

## Stand

Der aktuelle Stand ist für mich noch **unbefriedigend**, daher werde ich noch viel daran arbeiten müssen. Dennoch habe ich einiges dazugelernt und konnte doch einiges umsetzen, darunter auch mir völlig neue Anwendungen.

| ID    | Funktionale Anforderung      | ID-UseCase  | Auslöser | Beschreibung   | Akteur | Erledigt |
|-------|------------------------------|-------------|----------|----------------|--------|----------|
| FA01 | **Aufruf Formular** | **UC01** | Aufruf der Seite | Bein Aufruf der Wettbewerbseite wird ein leeres Formular dargestellt. | Teilnehmende |[x]|
| FA02 | **Bildupload** | **UC01** | Klick auf Button durchsuchen / optional: Drag and Drop | Bilder wird hochgeladen um vom Frontend zu Base64 umkoodiert um es später zu versenden | Teilnehmende |[x]|
| FA03 | **Teilnahme Wettbewerb** | **UC01** | Button Senden | Die Daten welche im Formular festgehalten wurden und die umkoodierten Bilder werden ans Backend-API gesendet. Das Backend koodiert Den Base64 code wieder zu Bilder um legt ein neues Verzeichniss an indem die Bilder gespeichert werden, der Pfad zu den Bildern wird in der Datenbank gespeichert. Alle anderen Informationen werden benfalls sauber auf der Datenbank hinterlegt. Auf die E-mail wird eine Verifizierung-Mail entsendet mit automatisch generiertem Login (E-mail/Passwort) wie auch zugleich eine Informationsmail an den Admin | Teilnehmende |[~]|
| FA04 | **Optional: Aufruf Projekt** | **UC02** | Login auf der Webseite als Teilnehmende/r | Nach dem Einlogen, wird das Projekt des Teilnehmers vom Backend angefoddert. Das Backend holt sich die Daten von der Datenbank schreibt die Bilder zu Base64 um und versendet diese an die Frontend-API. Frontend schreibt das Base64 um und gibt die Daten wieder in einer GUI aus. | Teilnehmende |[ ]|
| FA05 | **Jury-Konto anlegen** | **UC03** | E-mail von künftigem Jurymitglied wird eingegben evtl. noch weitere Informationen und button hinzufüügen wird geklickt | Frontend überprüft ob alle nötigen Daten angeben wurden, falls ja werden die Informationen ans Backend versendet. Das Backend hinterlegt das Mitglied auf der Datenbank und generiert ein Passwort, welches per Mail an die Jury versendet wird. Falls Informationen fehlen wird dies in der GUI Angezeigt um den Akteuer zu informaieren. | Admin |[~]|
| FA06 |  **Passwortreset** | **UC05** | Admin drückt Button ``Passwort zurücksetzen`` | Es wird vom Frontend ein Fenster aufgerufen, wobei der Vorgang nochmal bestätigt werden muss. Wenn der Admin bestätigt wird das Backend-API angesprochen zum reset. Das Backend überprüft ob jemand mit der Adminrolle dies ausführt. Wenn es zutrifft wird der User von der Datenbank rausgesucht und das hinterlegte Passwort gelöscht, daraufhin generiert das Backend ein neues Passwort speichert dieses ab und sendet dieses per Mail an den entsprechenden User. | Admin |[~]|
| FA07 | **Änderungen Speichern** | **UC06** | Admin drückt auf ``Speichern`` | Das Projekt mit seinen Änderungen wird genommen und an das Backend versendet. Das Backend überschreibt das entsprechende Projekt falls Werte sich geändert haben mit den Änderungen | Admin |[~]|

## Testszenarios

| Testszenario | Title | Akteur | Beschreibung | Erwartung |
| ------------ | ----- | ------ | ------------ | --------- |
| **T01** | **Aufruf Wettbewerb** | Teilnehmende | Die Wettbewerbseite wird aufgerufen | Die Seite wird wie gewünscht in einem sauberen GUI augerufen und es wird ein leeres Formular zum ausfüllen dargestellt. |
| **T02** | **Bild hochladen** | Teilnehmende | Ein Bild wird hochgeladen | Das Bild wird sauber hochgeladen und in Base64 umkoodiert und bereit gelegt zum versenden. |
| **T03** | **Versenden des Formulars** | Teilnehmende | Das ausgefüllte Formular und die bereitgelegten Bilder werden versendet | Das Formular und die Bilder werden an das Backend versendet. Das Backend erstellt ein Verzeichnis für die Bilder koodiert diese wieder zu Bildern hinterlegt diese im Verzeichniss und hinterlegt den Pfad in der Datenbank. Alle Informationen werden sauber auf der Datenbank hinterlegt. Es wird eine Verifizierungsmail an die angebene Mailadresse versendet inclusive generiertem Passwort. Der Admin wird per Mail über den neune Teilnehmer informaiert. Sobald der Prozess durch ist wird eine Rückmeldung an das Frontend gesendet und der Teilnehmende wird informiert, dass er die Verifizierungsmail bestätigen soll. |
| **T04** | **Jury mitglied erstellen** | Admin | Mailadresse des Jurymitglied wird eingegeben und mit Hinzufügen wird das Konto angelegt | Das Konto für das Jurymitglied wird erfolgreich erstellt und im wird per Mail sein Passwort zugesendet |
| **T05** | **Bewerten** | Jury | Jury Bewertet Projekt und drückt auf Speichern | Die Bewertung der Jury wird sauber auf der Datenbank hinterlegt. |
| **T06** | **Auswertung** | Admin | Der Admin öffnet die Seite für die Auswertung | Die Informationen werden vom Backend geholt und in einer Liste sauber Dargestellt |
| **T07** | **Passwort zurücksetzen** | Admin | Der Admin betätigt "Passwort zurücksetzen"- Button | Das Passwort des Users/Jury wird zurückgesetzt und neu generiert. |
| **T07** | **Änderungen an Wettbewerbsinformationen** | Admin | Der Admin drückt auf "Änderungen Speichern" | Die Wettbewerbsinformationen werden auf der Datenbank überschrieben und somit sind die Änderungen aktiv. |

## Testfälle

| Testfall | Testszenario | Tester | Status | Beschreibung |
| -------- | ------------ | ------ | ------ | ------------ |
| **TF01** | **T01** | Yannick Basler | Erfolgreich | Der Aufruf der Startseite funktioniert tadellos |
| **TF02** | **T02** | Yannick Basler | Zum Teil erfolgreich | Dem Code fehlt ein passendes Timeout "await" die Bilder werden in Base64 konvertiert aber der Code wartet dies nicht ab, bevor die Daten versendet werden. |
| **TF03** | **T03** | Yannick Basler | Zum Teil erfolgreich | Daten werden versendet, User wird erstellt, Passwort wird generiert und Hash wird hinterlegt. Mailfunktion ist noch nicht implementiert und Bilder werden noch nicht abgespeichert. |
| **TF04** | **T04** | Yannick Basler | Zum Teil erfolgreich | Mailfunktion noch nicht implementiert |
| **TF05** | **T05** | Yannick Basler | Misserfolg | Übertragung der Bewertung noch nicht erstellt. Nur Bewertungsraster wird aktuell sauber an das Frontend überliefert. |
| **TF06** | **T06** | Yannick Basler | Misserfolg | Auswertung ist noch nicht implementiert |
| **TF07** | **T07** | Yannick Basler | Erfolgreich | Das Passwort wird zurückgesetzt und durch ein neues ersetzt auf der Datenbank wird neuer Hash und Salt festgehalten. |
| **TF08** | **T08** | Yannick Basler | Erfolgreich | Tadelloses speichern der Änderungen der Wettbewerbsinformationen. |
