# Ejercicio 3

Analizar el siguiente código señalando declaraciones y aplicaciones de reglas, y su efecto.

---

```css
p.quitar {
  color: red;
}
*.desarrollo {
  font-size: 8px;
}
.importante {
  font-size: 20px;
}
```

```html
<p class="desarrollo">
  En este primer párrafo trataremos lo siguiente:
  <br />xxxxxxxxxxxxxxxxxxxxxxxxx
</p>

<p class="quitar">
  Este párrafo debe ser quitado de la obra…
  <br />xxxxxxxxxxxxxxxxxxxxxxxxx
</p>

<p>
  En este otro párrafo trataremos otro tema:<br />
  xxxxxxxxxxxxxxxxxxxxxxxxx
</p>

<p class="importante">
  Y este es el párrafo más importante de la obra…
  <br />xxxxxxxxxxxxxxxxxxxxxxxxx
</p>

<h1 class="quitar">Este encabezado también debe ser quitado de la obra</h1>

<p class="quitar importante">Se pueden aplicar varias clases a la vez</p>
```

---

## Respuesta

Dentro de los estilos que se aplica a todas las clases con 'desarrollo' se va aplicar un cambio al tamaño de la fuente. Em los estilos a las clases 'quitar' nada mas se aplican este estilo('p.quitar') que se encarga cambiar el color de la fuente solo si se encuentran seguido de las etiquetas 'p' por lo que a h1 no se le va a aplicar nada, si se bucara que se aplique ese estilo a todas las clases 'quitar' el estilo se hubiera llamado '.quitar'.  
Y con la clase 'importante' se va a aplicar ese estilo a todas las clases que tengan ese nombre, aplicando un cambio al tamaño de la fuente.
