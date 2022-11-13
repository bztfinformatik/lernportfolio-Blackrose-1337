# Concept Map

## Begriffe

- [if-Funktion bei Twig](tech/twig.md)
- [if-Funktion bei Vue](projekt/vue_js.md)
- [Mocking von Daten](tech/mocking.md)
- [Rendern von View](tech/rendern.md)
- [empty()-Funktion](tech/emptyFunktion.md)
- [sanitizen von Daten](tech/sanitizen.md)

```plantuml
@startuml
[Mocking von Daten]
[if-Funktion bei Twig]
[INPUT]
[Rendern von View]
[empty()-Funktion]
[sanitizen von Daten]

[Mocking von Daten]<-down->[sanitizen von Daten]
[empty()-Funktion]<-left->[Mocking von Daten]
[empty()-Funktion]<-down->[if-Funktion bei Twig]
[if-Funktion bei Twig]<-right->[Rendern von View]
[Mocking von Daten]<-down->[if-Funktion bei Twig]
[sanitizen von Daten]<---[INPUT]
[Rendern von View]--->[INPUT]

note top of [Mocking von Daten]
    Beispiel-Daten um ein Ablauf zu testen
end note

note top of [empty()-Funktion]
    Überprüfung ob das Element Leer ist
end note

note bottom of [if-Funktion bei Twig]
    Überprüfung einer Anforderung, falls es true ausgibt
    wird das Segement dargestellt
end note

note bottom of [sanitizen von Daten]
    sanitize des Inputs, welche illegal
    sind und daher terminiert werden
end note

note bottom of [Rendern von View]
    Projetzierung der Daten durch eine Darstellungssprache
end note

note bottom of [INPUT]
    Eingabe des Users
end note

note "Falls die Überprüfung von empty()->true ergibt \n wird das Element des if gerendert " as template

template .. [Rendern von View]
template .. [if-Funktion bei Twig]
[empty()-Funktion] . template

@enduml
```
