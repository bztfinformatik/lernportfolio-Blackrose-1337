# Concept Map

## Begriffe

- [Sessions](tech/sessions_cookies.md)
- [Cookies](tech/sessions_cookies.md)
- [$_COOKIE](tech/sessions_cookies.md)
- [$_SESSION](tech/sessions_cookies.md)
- session_helper.php
- [Authorisierung (Routen schützen)](tech/sessions_cookies.md)
- JSON (in Datenbank)

```plantuml
@startuml

@startuml

[Sessions]
[Cookies]
[$_COOKIE]
[$_SESSION]
[session_helper]
[Authorisierung]
[JSON]



[session_helper] <-up-> [$_SESSION] : Der Session_helper startet \n die Session um $_Session zu verwenden
[Sessions] <--> [$_SESSION] : $_SESSION Datenbank der Session 
[Sessions] <-right-> [Cookies] : Beide speichern Informationen zur \nSitzung zwischen User und Server 
[$_COOKIE] <--> [$_SESSION]
[Cookies] <-right-> [$_COOKIE] : $_COOKIE Datenbank für Cookies
[Authorisierung] <--left--> [$_SESSION] : Bestimmt Authorisierungsgrad
[Authorisierung] <-down-> [JSON] : Bestimmt, wie weit ein User Authorisiert ist.\nDaten auf der Datenbank zu ändern. 


' ### Notes ###
note top of [Sessions]
  Enthält Informationen zur aktiven Sitzung eines Users zu einem Server.
end note

note top of [Cookies]
  Cookies werden verwendet um Informationen vom User zwischenzuspeichern.
end note

note bottom of [session_helper]
  Enthält session_start() und wird in der ersten Ebene des PHP Konstrukts
  implementiert, damit diese auf allen darauffolgenden ebenen enthalten ist.
end note

note bottom of [JSON]
  JSON ist ein Datenformat, welches meistens verwendet wird
  um Daten im Internet zu kommunizieren.
end note


@enduml
```
