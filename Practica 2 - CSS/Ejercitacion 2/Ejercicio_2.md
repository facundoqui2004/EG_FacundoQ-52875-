# Ejercicio 2

Analizar el siguiente código señalando declaraciones y aplicaciones de reglas, y su efecto.

---

```css
p#normal {
  font-family: arial, helvetica;
  font-size: 11px;
  font-weight: bold;
}
*#destacado {
  border-style: solid;
  border-color: blue;
  border-width: 2px;
}
#distinto {
  background-color: #9ec7eb;
  color: red;
}
```

```html
<p id="normal">Este es un párrafo</p>
<p id="destacado">Este es otro párrafo</p>
<table id="destacado">
  <tr>
    <td>Esta es una tabla</td>
  </tr>
</table>
<p id="distinto">Este es el último párrafo</p>
```

---

## Respuesta

Dentro de este código se puede ver que en el CSS se hacen referencia a cada 'id' de las etiquetas.

- En `p#destacado` se hace referencia a todo `p` que tenga ese `id` por lo que aplican modificaciones a las fuentes.
- Luego `*#destacado` se aplica a todas las etiquetas que tengan el `id='destacado'`, se le va a aplicar ese estilo sin importar que sean `p`, `div`, demás, y dentro de esto se aplica un borde de color y con un ancho a todos los contenedores de esas etiquetas.
- En la referencia a `#distinto` se aplica el estilo a las etiquetas que tengan ese `id`, además aplicándole un fondo de color al `background` y cambiando el color de la fuente a rojo.

Dentro de las reglas hay una que no se cumple que es la unicidad del id debido a que las etiquetas con #destacado  se le aplican estos estilos a dos etiquetas de distinto tipo <p> y <table>