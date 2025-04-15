# Ejercicio 1: Responder

1. **¿Qué es CSS y para qué se usa?**

Css no es realmente un lenguaje de programación, lenguaje marcado, este permite aplicar estilos de manera selectiva a elementos en documentos HTML. Este describe cómo los elementos en la página son presentados al usuario.

2. **CSS utiliza reglas para las declaraciones de estilo, ¿cómo funcionan?**

Si utiliza reglas para declaración de estilo, de tres maneras:

- Directamente a la marca
- En el Head de la página
- O agrupar las reglas de estilo en un archivo independiente con extensión \*.css

Una regla CSS se compone de:

- **Selector**: Indica a qué elemento(s) HTML se aplica el estilo (ej: `p`, `.clase`, `#id`).
- **Declaraciones**: Entre llaves `{}`, con pares propiedad: valor (ej: `color: blue;`).

3. **¿Cuáles son las tres formas de dar estilo a un documento?**

Las formas de dar estilo a un documento son:

1. A Nivel del elemento HTML (Dentro del documento HTML)
2. A Nivel de página (Dentro del documento HTML)
3. Definición en un archivo externo

4. **¿Cuáles son los distintos tipos de selectores más utilizados? Ejemplifique cada uno.**

Dentro de los selectores más utilizados desde mi punto de vista viendo en la página [http://www.sidar.org/recur/desdi/traduc/es/css/selector.html#q2](http://www.sidar.org/recur/desdi/traduc/es/css/selector.html#q2), los selectores que son más utilizados son los selectores de tipo que corresponde con el nombre de tipo de elemento en el lenguaje del documento. Un tipo de elemento equivale con cada instancia del tipo de elemento en la estructura del documento.

Ejemplo con los `H1`:

```css
H1 {
  font-family: sans-serif;
}
```

---

5. **¿Qué es una pseudo-clase? ¿Cuáles son las más utilizadas aplicadas a vínculos?**

(Pseudo-elementos y pseudo-clases) Es una forma de aplicar estilo a un elemento basado en su posición.

Las pseudo-clases clasifican a los elementos basado en características más allá de su nombre, atributos o contenido; en principio, atributos que no pueden deducirse de la estructura del documento. Las pseudo-clases pueden ser dinámicas, en el sentido de que un elemento puede adquirir o perder una pseudo-clase a medida que el usuario interactúa con el documento.

Dentro de las pseudo-clases podemos encontrar:

- La pseudo-clase `:first-child`.
- Las pseudo-clases vínculo: `:link` y `:visited`.
- Las pseudo-clases dinámicas: `:hover`, `:active` y `:focus`.
- La pseudo-clase de lenguaje: `:lang`.

Dentro de las más utilizadas tenemos a las pseudo-clases dinámicas (Aplicaciones del usuario interactivas a veces cambian el procesamiento en respuesta a las acciones del usuario) y de vínculo (Aplicado a vínculos no visitados de un modo diferenciado de aquellos previamente visitados).

6. **¿Qué es la herencia?**

Es la forma que se heredan valores siguiendo la estructura del documento, o sea que algunos valores de las propiedades CSS establecidas en elementos padres se transmiten a sus elementos hijos.

7. **¿En qué consiste el proceso denominado cascada?**

El proceso de cascada es el mecanismo por el cual el navegador determina qué estilos aplicar a un elemento cuando existen múltiples reglas CSS que podrían afectarlo. La "cascada" se refiere a cómo las reglas de diferentes fuentes fluyen juntas, con algunas teniendo prioridad sobre otras.jercicio 1: Responder
