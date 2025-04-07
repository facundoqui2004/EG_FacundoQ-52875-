# Ejercitación 3

En cada caso, explicar las diferencias entre los segmentos de código y sus visualizaciones:

## 3.a)

### Código:

```html
1-<a href="http://www.google.com.ar">Click aquí para ir a Google</a> 2-<a
  href="http://www.google.com.ar"
  target="_blank"
  >Click aquí para ir a Google</a
>
3-<a
  href="http://www.google.com.ar"
  type="text/html"
  hreflang="es"
  charset="utf-8"
  rel="help"
>
  4-<a href="#">Click aquí para ir a Google</a> 5-<a href="#arriba"
    >Click aquí para volver arriba</a
  >
  6-<a name="arriba" id="arriba"></a
></a>
```

### Respuesta:

1. Accedemos al enlace pero salimos de la página, es decir, vamos al enlace en la misma pestaña.
2. Accedemos al enlace en una nueva pestaña.
3. Al no tener el nombre donde se encontraría el enlace, no podemos dirigirnos a este.
4. Al no haber enlace, nos quedamos en el documento.
5. Cuando se hace clic, la página se desplazará automáticamente hasta el elemento que tenga `id="arriba"` o `name="arriba"`.
6. Este elemento invisible marca la posición a la que saltará la página.

---

## 3.b)

### Código:

```html
<p>
  <img src="im1.jpg" alt="imagen1" /><a href="http://www.google.com.ar"
    >Click aquí</a
  >
</p>
<p>
  <a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" /></a>
  Click aquí
</p>
<p>
  <a href="http://www.google.com.ar"
    ><img src="im1.jpg" alt="imagen1" />Click aquí</a
  >
</p>
<p>
  <a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" /></a>
  <a href="http://www.google.com.ar">Click aquí</a>
</p>
```

### Respuesta:

Lo que cambia es que podemos elegir el elemento con el que queremos acceder en los primeros dos casos hacemos que en acceso al enlace `<a></a>` este en Click pero despues se coloca como un texto. En el terce caso se hace en el texto completo imagen1Click aqui ya que esta todo en el enlzace. Estos tres ejemplos aplican el "alt" que es para describir a la imagen, en los primeros casos aparece es descripcion en la pagina por que como no hay imagen se muestra la descripcion.

---

## 3.c)

### Código:

```html
<ul>
  <li>xxx</li>
  <li>yyy</li>
  <li>zzz</li>
</ul>
<ol>
  <li>xxx</li>
  <li>yyy</li>
  <li>zzz</li>
</ol>
<ol>
  <li>xxx</li>
</ol>
<ol>
  <li value="2">yyy</li>
</ol>
<ol>
  <li value="3">zzz</li>
</ol>
<blockquote>
  <p>
    1. xxx<br />
    2. yyy<br />
    3. zzz
  </p>
</blockquote>
```

### Respuesta:

En estos casos se aplican las listas, los dos primeros casos se muestran las dos formas de presentarlas, en la tercera se aplica un espacio en blaco con `<ol></ol>`, y el cuato caso se aplica `<blockquote></blockquote>` se usa para crear un bloque, y se aplican los puntos en forma de texto aplicando las tabulaciones `<br>`.

## 3.d)

### Código:

```html
<table border="1" width="300">
  <tr>
    <th>Columna 1</th>
    <th>Columna 2</th>
  </tr>
  <tr>
    <td>Celda 1</td>
    <td>Celda 2</td>
  </tr>
  <tr>
    <td>Celda 3</td>
    <td>Celda 4</td>
  </tr>
</table>
<table border="1" width="300">
  <tr>
    <td>
      <div align="center"><strong>Columna 1</strong></div>
    </td>
    <td>
      <div align="center"><strong>Columna 2</strong></div>
    </td>
  </tr>
  <tr>
    <td>Celda 1</td>
    <td>Celda 2</td>
  </tr>
  <tr>
    <td>Celda 3</td>
    <td>Celda 4</td>
  </tr>
</table>
```

### Respuesta:

Son diferentes formas de hacer una tabla. En el primer caso, tenemos una tabla con 2 columnas y 3 filas (una fila de encabezado y dos filas de datos), donde "Columna 1" y "Columna 2" están marcadas como celdas de encabezado usando la etiqueta `<th>`. En el segundo caso, estas mismas columnas se implementan como celdas normales `<td>` con formato aplicado manualmente para simular el aspecto de un título de columna. La primera tabla es superior porque es semánticamente correcta al usar los elementos HTML según su propósito original y requiere menos código al aprovechar los estilos predeterminados que los navegadores aplican a los elementos `<th>`. Además, al usar la etiqueta apropiada `<th>`, la estructura de la tabla es más clara y mantenible.

## 3.e)

### Código:

```html
<table width="200">
  <caption>
    Título
  </caption>
  <tr>
    <td bgcolor="#dddddd">&nbsp;</td>
    <td bgcolor="#dddddd">&nbsp;</td>
    <td bgcolor="#dddddd">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#dddddd">&nbsp;</td>
    <td bgcolor="#dddddd">&nbsp;</td>
    <td bgcolor="#dddddd">&nbsp;</td>
  </tr>
</table>
<table width="200">
  <tr>
    <td colspan="3">
      <div align="center">Título</div>
    </td>
  </tr>
  <tr>
    <td bgcolor="#dddddd">&nbsp;</td>
    <td bgcolor="#dddddd">&nbsp;</td>
    <td bgcolor="#dddddd">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#dddddd">&nbsp;</td>
    <td bgcolor="#dddddd">&nbsp;</td>
    <td bgcolor="#dddddd">&nbsp;</td>
  </tr>
</table>
```

### Respuesta:

Los dos caso se muestran tablas nada mas que en el primero definimos el ancho en pixeles de la tabla y celdas y en el segundo caso aplicamos el <colspan> para indicar cuántas filas debe ocupar una celda.

---

## 3.f)

### Código:

````html
<table width="200">
  <tr>
    <td colspan="3">
      <div align="center">Título</div>
    </td>
  </tr>
  <tr>
    <td rowspan="2" bgcolor="#dddddd">&nbsp;</td>
    <td bgcolor="#dddddd">&nbsp;</td>
    <td bgcolor="#dddddd">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#dddddd">&nbsp;</td>
    <td bgcolor="#dddddd">&nbsp;</td>
  </tr>
</table>
<table width="200">
  <tr>
    <td colspan="3">
      <div align="center">Título</div>
    </td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#dddddd">&nbsp;</td>
    <td bgcolor="#dddddd">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#dddddd">&nbsp;</td>
    <td bgcolor="#dddddd">&nbsp;</td>
    <td bgcolor="#dddddd">&nbsp;</td>
  </tr>
</table>

### Respuesta: Lo que se aplica en estos casos son
<rowspan>
  y
  <colspan>
    siendo que primero difinimos la tabla de tres filas, donde colspan se usa
    para que 2 o mas celdas en una misma fila se fusionen en 1 y en rowspan se
    fusionan 2 o mas celdas de la misma fila ## 3.g) ### Código: ```html
    <table width="200" border="1">
      <tr>
        <td colspan="3">
          <div align="center">Título</div>
        </td>
      </tr>
      <tr>
        <td colspan="2" rowspan="2">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="50%">&nbsp;</td>
      </tr>
    </table>
    <table width="200" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2">
          <div align="center">Título</div>
        </td>
      </tr>
      <tr>
        <td rowspan="2">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="50%">&nbsp;</td>
      </tr>
    </table></colspan
  ></rowspan
>
````

### Respuesta:

En estos casos se aplica el atributo de borde a la tabla "border="1" , nada mas que en el segundo casose aplica "cellpadding="0"" que controla el espacio interno (padding) entre el contenido de una celda y sus bordes y "cellspacing="0"" elimina el espacio entre celdas (grosor de los "muros" internos de la tabla)

---

## 3.h)

### Código:

```html
<form
  id="form1"
  name="form1"
  action="procesar.php"
  method="post"
  target="_blank"
>
  <fieldset>
    <legend>LOGIN</legend>
    Usuario: <input type="text" id="usu1" name="usu1" value="xxx" /><br />
    Clave: <input type="password" id="clave1" name="clave1" value="xxx" />
  </fieldset>
  <input type="submit" id="boton1" name="boton1" value="Enviar" />
</form>
<form id="form2" name="form2" action="" method="get" target="_blank">
  LOGIN<br />
  <label>Usuario: <input type="text" id="usu2" name="usu2" /></label><br />
  <label>Clave: <input type="text" id="clave2" name="clave2" /></label><br />
  <input type="submit" id="boton2" name="boton2" value="Enviar" />
</form>
<form
  id="form3"
  name="form3"
  action="mailto:xx@xx.com"
  enctype="text/plain"
  method="post"
  target="_blank"
>
  <fieldset>
    <legend>LOGIN</legend>
    Usuario: <input type="text" id="usu3" name="usu3" /><br />
    Clave: <input type="password" id="clave3" name="clave3" />
  </fieldset>
  <input type="reset" id="boton3" name="boton3" value="Enviar" />
</form>
```

### Respuesta:

Estos tres formularios de login presentan diferencias clave en seguridad, estructura y funcionamiento. Mientras el primero y tercero ocultan las contraseñas con type="password", el segundo las muestra en texto plano con type="text". Dos formularios usan type="submit" para enviar datos, pero el tercero tiene type="reset" que solo limpia campos. En estructura, el primero y tercero agrupan campos con " <fieldset>", mientras el segundo solo usa saltos de línea. Los métodos de envío varían: POST a PHP, GET a la misma página, y mailto: con errores . Pero dentro de los tres formularios el primero es mas completo.
