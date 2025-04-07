````markdown
# Análisis de Segmentos de Código HTML

Analizar los siguientes segmentos de código indicando en qué sección del documento HTML se colocan, cuál es el efecto que producen y señalar cada uno de los elementos, etiquetas, y atributos (nombre y valor), aclarando si es obligatorio.

## 2.a)

**Código:**

```html
<!-- Código controlado el día 12/08/2009 -->
```
````

**Respuesta:**  
Este es un comentario, se puede colocar en cualquier parte del documento, excepto dentro de las etiquetas. Los comentarios son herramientas para desarrolladores que no impactan la visualización final de la página.

---

## 2.b)

**Código:**

```html
<div id="bloque1">Contenido del bloque1</div>
```

**Respuesta:**

- Se encuentra en el cuerpo `<body>`.
- `<div>` es un elemento de división de contenido. No tiene efecto en el contenido o en el diseño hasta que se le aplica un estilo usando CSS.
- En este caso, "Contenido del bloque1" sería el texto que se encuentra en ese contenedor.
- `id="bloque1"` es un atributo que permite identificar a la etiqueta.

---

## 2.c)

**Código:**

```html
<img
  src=""
  alt="lugar imagen"
  id="im1"
  name="im1"
  width="32"
  height="32"
  longdesc="detalles.htm"
/>
```

**Respuesta:**

- Es una etiqueta que muestra una imagen en la página web y posee una serie de atributos.
- Solo se puede colocar en `<body>`.

**Atributos:**

- `src=""`: Ruta de la imagen. Si está vacío, la imagen no se carga.
- `alt="lugar imagen"`: Texto alternativo para la imagen.
- `id="im1"`: Identificador único.
- `name="im1"`: Nombre para scripts.
- `width="32"`: Ancho de la imagen en píxeles.
- `height="32"`: Alto de la imagen en píxeles.
- `longdesc="detalles.htm"`: URL de la descripción larga de la imagen.

---

## 2.d)

**Código:**

```html
<meta name="keywords" lang="es" content="casa, compra, venta, alquiler " />
<meta http-equiv="expires" content="16-Sep-2019 7:49 PM" />
```

**Respuesta:**

- `<meta>` es un metadato que aporta información sobre el documento.
- Estos elementos `<meta>` van dentro de la sección `<head>` del documento HTML.

**1. Proporcionar metadatos sobre el contenido de la página:**

- `name="keywords"`: Nombre al que se asocia la metainformación.
- `lang="es"`: Idioma del contenido del elemento y del valor de sus atributos.
- `content="casa, compra, venta, alquiler "`: Lista de palabras clave asociadas.

**2. Controlar el caché del navegador:**

- `http-equiv="expires"`: Aporta información sobre los encabezados de respuesta HTTP.
- `content="16-Sep-2019 7:49 PM"`: Fecha y hora de expiración.

---

## 2.e)

**Código:**

```html
<a
  href="http://www.e-style.com.ar/resumen.html"
  type="text/html"
  hreflang="es"
  charset="utf-8"
  rel="help"
  >Resumen HTML</a
>
```

**Respuesta:**

- `<a>` crea un enlace a otras páginas de internet, archivos o ubicaciones dentro de la misma página, direcciones de correo, o cualquier otra URL.
- Va dentro del `<body>` del documento HTML.
- Muestra un enlace clickeable con el texto "Resumen HTML".

**Atributos:**

- `href="http://www.e-style.com.ar/resumen.html"`: URL del recurso vinculado.
- `type="text/html"`: Especifica el tipo de medio (media type) en la forma de MIME type para la URL enlazada.
- `hreflang="es"`: Idioma del recurso vinculado.
- `charset="utf-8"`: Codificación del recurso vinculado.
- `rel="help"`: Indica que el enlace es un recurso de ayuda.

---

## 2.f)

**Código:**

```html
<table width="200" summary="Datos correspondientes al ejercicio vencido">
  <caption align="top">
    Título
  </caption>
  <tr>
    <th scope="col">&nbsp;</th>
    <th scope="col">A</th>
    <th scope="col">B</th>
    <th scope="col">C</th>
  </tr>
  <tr>
    <th scope="row">1º</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">2º</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
```

**Respuesta:**

- El elemento de tabla HTML (`<table>`) representa datos en dos o más dimensiones.
- Crea una tabla estructurada con cabeceras y celdas vacías.

**Atributos:**

- `width="200"`: Ancho en píxeles.
- `summary="Datos correspondientes al ejercicio vencido"`: Texto descriptivo.
- `<tr>`: Define una fila de celdas en una tabla.
- `<th>`: Define una celda como encabezado de un grupo de celdas en una tabla.
- `<td>`: Define una celda de datos en una tabla.
- `scope="col"`: Define la relación de las celdas con las cabeceras.
- `&nbsp;`: Representa celdas vacías.

```

```
