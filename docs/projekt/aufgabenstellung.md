# Aufgabenstellung Onlineversion Gewinnspiel

## Ausgangslage

Das Gewinnspiel wird zweimal im Jahr durchgeführt. Die Teilnehmenden reichen passend zur jeweiligen Aufgabenstellung, Fotos von Projekten und Beschreibungen dazu ein. Bisher schreiben sie eine Mail und hängen Fotos im .jpg-Format oder PDF's an.

Derzeit erfasst wird aus den Mails:

- Das Mailanschreiben
- Die Anlagen (Fotos etc.)
- Pro Teilnehmenden wird ein Ordner angelegt (numerische Sortierung)
- Manuell wird eine Excelliste mit den Kontaktdaten angelegt (nummeriert wie die Ordner). Folgende Daten sind hier enthalten: Name, Vorname, Strasse, Land, Mailadresse, ggf. Insta-Name, Facebook-Name

Nach Ablauf des Einsendeschlusses werden alle Fotos und die anonymisierten Anschreiben in die Bewertungstabelle übertragen (siehe Excelliste anbei). Diese wird an die Jurymitglieder zur Bearbeitung versandt.

Nach Abschluss der Bewertung schreiben wir alle Teilnehmenden (Gewinner und Nichtgewinner) an anhand der Daten aus der Adress-Excelliste.

Manuell werden ausgewählte Fotos und Auszüge aus den Texten in eine Bildergalerie auf ******* hochgeladen.

## Use Cases

| ID   | Use Case                       | Auslöser | Beschreibung   | Akteur | Vorbedingungen | Nachbedingungen |
|------|--------------------------------|----------|----------------|--------|----------------|----------------|
| UC01 | **Teilnahme Wettbewerb** | Person will am Wettbewerb teilnehmen | 1. Aufruf der Seite<br /> 2. Ausfüllen Formular <br /> 3. Absenden der Daten <br /> 4. E-mail verifizierung bestätigen<br />5. Teilnehmende/r erhält Passwort zum anmelden | Teilnehmende | Wettbewerb ist in der Einsendungsphase | Teilnehmende/r hat erfolgreich sein Projekt für den Wettbewerb hochgeladen |
| UC02 | **Optional: Teilnehmende können ihr Projekt anpassen** | Teilnehmender möchte eine Änderung an seinem Projekt machen | 1. Ladet andere Bilder Hoch oder ändert die Beschreibung seines Projekts. <br /> 2. Speichert die Änderungen | Teilnehmende | **UC01**<br /> Teilnehmende/r ist angemeldet | Änderungen konnten erfolgreich gespeichert werden |
| UC03 | **Jurymitglieder erstellen** | Der Admin will ein Jurymitglied erstellen | 1. Der Admin erstellt ein Jurymitglied<br />Jurymitglied erhält eine Mail mit zugangsdaten | Admin, Jury | vorhandene Mailadresse<br />als Admin angemeldet | Jurymitglied kann sich anmelden |
| UC04 | **Userverwaltung** | Der Admin will Userdaten anpassen | 1. Admin wählt User aus<br />2. Admin ändert Daten und speichert diese | Admin | als Admin angemeldet | Daten wurden gespeichert |
| UC05 | **Passwortreset** | Der Admin will Passwort zurücksetzen von User | 1. Admin wählt User aus<br />2. Admin setzt Passwort zurück<br />3.User erhält per Mail Zugangsdaten | Admin | als Admin angemeldet | Passwort wurde neu generiert und gespeichtert. |
| UC06 | **Export von Daten** | Der Admin möchte Daten exportieren | Der Admin kann hochgeladen Daten exportieren | Admin | Daten sind vorhanden<br />als Admin angemeldet | Daten wurden exportiert |
| UC07 | **Projekte anonymisieren** | Admin will Projekte anonymisieren | 1. Admin wählt Projekt aus<br />2. Admin anonymisiert Daten<br />3. Admin Speichert die Änderung | Admin | Einsendungsphase beendet<br />als Admin angemeldet | Änderungen wurden gespeichert |
| UC08 | **Neuer Wettbewerb** | Der Admin möchte ein neuen Wettbewerb starten | 1.Der Admin initalisiert neuen Wettbewerb<br />2. Admin passt Titel/Texte von neuen Wettbewerb an.<br /> Admin bestimmt Zeitraum.<br /> Admin speichert die Änderungen | Admin | alter Wettbewerb ist abgeschlossen<br />als Admin angemeldet | Neuer Wettbewerb wurde bereitgestellt |
| UC09 | **Jury erhält Zugangsdaten** | Admin erstellt Jurymitglied | Ein Jurymitglied erhält seine Zugangsdaten per E-Mail | Admin, Jury | **UC03** | Jurymitglied kann sich anmelden |
| UC11 | **Jury Bewertung** | Ein Jurymitglied will Projekte bewerten | Jurymitglied kann Projekte online bewerten | Jury | **UC09**<br />als Jury angemeldet | Bewertung wird gespeichert |

## Funktionale Anforderungen

| ID    | Funktionale Anforderung      | ID-UseCase  | Auslöser | Beschreibung   | Akteur | Vorbedingungen | Nachbedingungen |
|-------|------------------------------|-------------|----------|----------------|--------|----------------|-----------------|
| FA01 | **Aufruf Formular** | Aufruf der Seite | Der Aufruf der Seite öffnet dem Teilnehmenden ein leeres Formular | Teilnehmende | - | - |
| FA02 | **Teilnahme Wettbewerb** | Button Senden | Teilnehmende des Gewinnspiels können Kontaktdaten, Fotos und Beschreibung ihres Projekts online hochladen, ohne Login/"Registration" | Teilnehmende | Pflichfelder ausgefüllt | Teilnehmende/er wird über erfolgreichen Versand informiert und start **UC03** |
| FA03 | **Verifizierung** | Button Senden | Nach dem Absenden des Teilnahmeformulars erhalten Benutzer/innen eine Bestätigungsmail mit automatisch generiertem Login (E-Mail/Passwort) | Teilnehmende | Projekt erfolgreich versendet **UC02** | - |

## Darstellung der Seiten

<!-- tabs:start -->

### **Admin**

![Admin GUI](../pics/Admin.png)

### **Jury**

![Jury GUI](../pics/Jury.png)

### **User**

![User GUI](../pics/User.png)

### **Wettbewerb**

![Wettbewerb GUI](../pics/Wettbewerbseite.png)

### **Login**

![Login GUI](../pics/Login.png)

<!-- tabs:end -->