# MVC Twig Auftag

## CSS Anpassung

Ich habe lediglich nachgesehen welches Css schon selbst implementiert wurde auf diesem habe ich dann die Farbe des Body(Hintergrund) angepasst.

<!-- tabs:start -->

### **HTMl**

```html

  {% block stylesheets %}
  <!-- Bootstrap core CSS -->
  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Own CSS -->
  <link rel="stylesheet" type="text/css" href="../../../public/css/sticky-footer-navbar.css" />
  {% endblock %}

```

Wichtig ist zu beachten das beim HTML die Einbindung durch das Twig gemacht wird mittels ``{% block stylesheets %}`` und wieder geschlossen wird mit ``{% endblock %}``

### **CSS**

```css
html {
    position: relative;
    min-height: 100%;
  }
  body {
    /* Margin bottom by footer height */
    margin-bottom: 60px;
    background-color: rgb(85, 156, 226);
  }
```

<!-- tabs:end -->

## Add Flugzeug

