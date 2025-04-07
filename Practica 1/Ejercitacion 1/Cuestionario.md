# Cuestionario

## 1. ¿Qué es HTML, cuándo fue creado, cuáles fueron las distintas versiones y cuál es la última?

HTML es un Lenguaje de Marcas de Hipertexto, utilizado para la elaboración de páginas web. Es un estándar en comparación con otros lenguajes, ya que permite conectar las elaboraciones de páginas con sus diferentes versiones. Además, posee una estructura y un código que sirven para más cosas aparte de páginas.

Fue creado en **1991** por **Tim Berners-Lee**. Sus distintas versiones fueron:

- **HTML**
- **HTML+** - 1993
- **HTML2** - 1995
- **HTML4** - 1997
- **HTML5** - 2014

Su última versión es **HTML5**, que incluye mejoras enfocadas en la interoperabilidad entre navegadores y nuevas funcionalidades:

- Multimedia nativo
- Geolocalización
- Gráficos y animaciones
- Aplicaciones web multiplataforma
- Almacenamiento local

---

## 2. ¿Cuáles son los principios básicos que el W3C recomienda seguir para la creación de documentos con HTML?

Los principios básicos que recomienda el **W3C** son que la web se basa en tres mecanismos para hacer que estos recursos estén listos y a disposición de la mayor audiencia posible:

1. Esquema uniforme para localizar recursos.
2. Protocolos de acceso a recursos con nombre en la Web.
3. Hipertexto, para navegar entre los recursos.

---

## 3. En las especificaciones de HTML, ¿cuándo un elemento o atributo se considera desaprobado? ¿Y obsoleto?

- Un **elemento o atributo desaprobado** es aquel que ha quedado anticuado por la presencia de estructuras nuevas. Los elementos desaprobados pueden declararse obsoletos en versiones futuras de HTML. Estos pueden seguir funcionando en navegadores por compatibilidad; su uso no se recomienda, pero no genera errores.
- Un **elemento o atributo obsoleto** es aquel que no tiene garantía de soporte por parte de un agente de usuario.

---

## 4. ¿Qué es el DTD y cuáles son los posibles DTDs contemplados en la especificación de HTML 4.01?

Un **DTD** (Definición del Tipo de Documento) es una declaración que define la estructura y las reglas de un documento HTML según un estándar específico. Especifica qué elementos, atributos y anidamientos son válidos en el documento. Actúa como un "manual de reglas" para validadores y navegadores.

Se declara junto a `DOCTYPE` en la primera línea. Los distintos tipos de DTD para las declaraciones son:

- **De entidades paramétricas**  
  Ejemplo: `<!ELEMENT PARAM - O EMPTY -- valor de propiedad con nombre -->`
- **De elementos**  
  Ejemplo: `<!ELEMENT UL - - (LI)+>`
- **De atributos**  
  Ejemplo:
  ```html
  <!ATTLIST MAP name CDATA #IMPLIED>
  ```

---

## 5. ¿Qué son los metadatos y cómo se especifican en HTML?

Un **metadato** es información que describe el contenido de un documento HTML, pero que no se muestra directamente en la página. Se define con la etiqueta `<meta>` dentro de la sección `<head>`. Estos ayudan a navegadores, motores de búsqueda y otras herramientas a entender y procesar el documento correctamente.

### Especificación de metadatos

La especificación de metadatos implica dos pasos:

1. **Declaración de una propiedad y de un valor para esta propiedad**:
   - Desde dentro de un documento, por medio del elemento `<meta>`.
   - Desde fuera de un documento, vinculando los metadatos por medio del elemento `<link>`.
2. **Referencia a un perfil** en el que se definen la propiedad y sus valores legales. Para designar un perfil, se usa el atributo `profile` del elemento `<head>`.

### Ejemplo de elementos

#### Elemento `<meta>`

```html
<!ELEMENT META - O EMPTY -- metainformación genérica -->
<!ATTLIST META
  %i18n; -- lang, dir, para usar con content --
  http-equiv  NAME           #IMPLIED  -- nombre de encabezado de respuesta HTTP --
  name        NAME           #IMPLIED  -- nombre de la metainformación --
  content     CDATA          #REQUIRED -- información asociada --
  scheme      CDATA          #IMPLIED  -- seleccionar forma de contenido --
>
```

#### Elemento `<link>`

```html
<!ELEMENT LINK - O EMPTY -- un vínculo independiente del medio -->
<!ATTLIST LINK
  %attrs; -- %coreattrs, %i18n, %events --
  charset     %Charset;      #IMPLIED  -- codificación de caracteres del recurso vinculado --
  href        %URI;          #IMPLIED  -- URI del recurso vinculado --
  hreflang    %LanguageCode; #IMPLIED  -- código de idioma --
  type        %ContentType;  #IMPLIED  -- tipo consultivo de contenido --
  rel         %LinkTypes;    #IMPLIED  -- tipos de vínculos directos --
  rev         %LinkTypes;    #IMPLIED  -- tipos de vínculos inversos --
  media       %MediaDesc;    #IMPLIED  -- para representar en estos medios --
>
```
