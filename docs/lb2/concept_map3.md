# Concept Map

## Begriffe

- mysql-Datenverbindung (alte Extension)
- mysqli-Datenverbindung (improved Extension)
- PDO-Datenverbindung
- PostgreSQL
- MySQL
- Prepared-Statement
- SQL-Injection

```plantuml
@startuml

@startuml

[mysql-Extension] as [mysql-e]
[mysqli-Extension)] as [mysqli-e]
[PDO]
[PostgreSQL]
[MySQL]
[Prepared-Statement] as [prepState]
[SQL-Injection] as [sql-inj]


[Datenbankverbindung] 
[DBMS]
[Security]

' ### Map ###
[Datenbankverbindung] <--> [mysql-e] : veraltet
[Datenbankverbindung] <--> [mysqli-e] : new mysqli()
[Datenbankverbindung] <--> [PDO] : new PDO(), $pdo->prepare()

[mysql-e] --> (mysqli-e) : Weiterentwicklung

[DBMS) <--> (PostgreSQL) : objektrelational
[DBMS) <--> (MySQL) : relational

[Security) <--> (prepState) : Platzhalter-Daten
[Security) <- - -> (sql-inj) : Sicherheitslücke ausnutzen

' ### Notes ###
note left of (mysql-e)
  Ist eine veraltete Extension,
  die nicht mehr genutzt werden soll
  und kann kein OOP.
end note

note bottom of (mysqli-e)
  Ist die Weiterentwicklung von mysql und
  OOP ist möglich.
  Das i steht für improved.
end note

note bottom of (PDO)
  PDO ist eine OOP und ist bekannt für die
  hohe Leistung. Der Vorteil von PDO ist,
  dass die Statements zuerst einmal vorbereitet
  werden und anschliessend mehrmals ausgeführt werden können.
end note

note bottom of (PostgreSQL)
  Open Source,
  wurde in den 1980er entwickelt
  und seit dem Jahr 1997 von der
  Open-Source-Community weiterentwickelt.
end note

note bottom of (MySQL)
  Ist das am verbreiteste Management-System für SQL
  und ist Open-Source. Es ist für verschiedene
  Betriebssysteme verfügbar und bildet
  eine Grundlage für dynamische Webapplikationen.
end note

note bottom of (prepState)
  Mit Prepared-Statements können SQL-Querys
  mit hoher Effizienz ausgeführt werden.
  Die Query wird dabei ohne Daten an die Datenbank gesendet.
  Die Platzhalter werden später eingefüllt.
end note

note bottom of (sql-inj)
  Bei der SQL-Injection wird eine Sicherheitslücke
  in SQL-Datenbanken ausgenutzt. Dabei werden
  Daten bösartig gelöscht oder verändert.
end note

note top of (DBMS)
  Datenbankmanagementsystem
end note
@enduml
```
