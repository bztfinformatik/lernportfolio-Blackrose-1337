# Vue.js

Vue ist ein [JavaScript](../projekt/javascript.md)-[Framework](../tech/framework.md) zum Erstellen von Benutzeroberflächen. Es baut auf Standard-HTML, CSS und [JavaScript](../projekt/javascript.md) auf und bietet ein **deklaratives und komponentenbasiertes Programmiermodell**, das Ihnen hilft, einfache oder komplexe Benutzeroberflächen **effizient** zu entwickeln.

**Deklaratives Rendering** : Vue **erweitert** Standard-HTML um eine Vorlagensyntax, die es ermöglicht, die HTML-Ausgabe basierend auf dem JavaScript-Status deklarativ zu beschreiben.

**Reaktivität** : Vue verfolgt automatisch JavaScript-Statusänderungen und aktualisiert das DOM effizient, wenn Änderungen auftreten.

<!-- tabs:start -->

## **Anwendungsmöglichkeiten**

- Verbessern von **statischem HTML** ohne **Build-Vorgang**
- Einbettung als **Webkomponenten** auf jeder Seite
- Single-Page-Anwendung (SPA)
- Fullstack / serverseitiges Rendering ([SSR](../tech/csr_ssr.md))
- Jamstack / Generierung statischer Sites (SSG)
- Ausrichtung auf Desktop, Mobilgeräte, WebGL und sogar das Terminal
  
<!-- tabs:end -->

Vue wird als „The Progressive Framework“ bezeichnet da es ein [Framework](../tech/framework.md) ist, welches sich mit Ihnen wachsen und sich an Ihre Bedürfnisse anpassen kann.

[Vue Dokumentationsseite](https://www.vuejs.org)

## if Methode

Bei **Vue** ist die ``if-Mehtode`` auch leicht einsetzbar direkt in seinem ``template/HTML``-Bereich. Als beispiel ein Teil aus meines **Projektes**.  
Dabei wollte ich eine **Sidebar-View** machen, bei der ``flexibl`` Daten dargestellt werden, je nach **Elementen** die auf der Hauptsicht gegeben sind oder übermittelt werden an dieses Element.

```vue
<template>
    <q-drawer show-if-above :width="300" :breakpoint="700" elevated bordered>
        <q-scroll-area class="fit">
            <q-card v-if="view === 'User'" bordered> <!-- Hier wird überprüft ob das Obere Element 'User' in das view-Element gepackt hat-->
                <q-card-section color="q-primary" class="fullwitdh">
                    <h4 class="title">Jury</h4>
                </q-card-section>
                <div v-for="p in personen" :key="p.id">
                    <div v-if="p.role === 'jury'" class="fullwidth"> <!-- Hier wird überprüft ob das ob das Element bei der Rolle 'jury' hinterlegt ist'-->
                        <q-btn class="fullwitdh" bordered color="secondary" @click="changeSelection(p)">{{
                            p.surname + " " + p.name
                        }}</q-btn>
                    </div>
                </div>
                <q-btn class="fullwitdh btn" color="primary" @click="addJury">Jurymitglied hinzufügen</q-btn>

                <h4 class="title">Teilnehmende</h4>
                <div v-for="p in personen" :key="p.id" class="fullwidth">
                    <div v-if="p.role === 'teilnehmende'">  <!-- Hier wird überprüft ob das ob das Element bei der Rolle 'teilnehmende' hinterlegt ist'-->
                        <q-btn class="fullwitdh" color="secondary" @click="changeSelection(p)">{{
                            p.surname + " " + p.name
                        }}</q-btn>
                    </div>
                </div>
            </q-card>
            <q-card v-if="view === 'Project'" bordered><!-- Hier wird überprüft ob das Obere Element 'Project' in das view-Element gepackt hat-->
                <q-card-section color="q-primary" class="fullwitdh">
                    <h4 class="title">Project</h4>
                </q-card-section>
                <div v-for="pro in project" :key="pro.id">
                    <div class="fullwidth">
                        <q-btn class="fullwitdh" bordered color="secondary">{{ pro.id }}</q-btn>
                    </div>
                </div>
            </q-card>
        </q-scroll-area>
    </q-drawer>
</template>
```
