```markdown
Ejercicio 5
En cada caso, declarar una regla CSS que produzca el siguiente efecto:
  1. Los textos enfatizados dentro de cualquier título deben ser rojos.
  2. Cualquier elemento que tenga asignado el atributo "href" y que esté dentro de cualquier párrafo que a
  su vez esté dentro de un bloque debe ser color negro.
  3. El texto de las listas no ordenadas que estén dentro del bloque identificado como “ultimo” debe ser
  amarillo pero si es un enlace a otra página debe ser azul.
  4. Los elementos identificados como “importante” dentro de cualquier bloque deben ser verdes, pero si
  están dentro de un título deben ser rojos.
  5. Todos los elementos h1 que especifique el atributo title, cualquiera que sea su valor, deben ser azules.
  6. El color de los enlaces en las listas ordenadas debe ser azul para los enlaces aún no visitados, y violeta
  para los ya visitados y, además, no deben aparecer subrayados.

1-
```css
h1, h2, h3, h4, h5, h6 {color: red;}

O Sino se puede realizar con los selectores descendientes
 h1 em h2 em h3 em h5 em h6 {color:red};

Se va a trabajar solo hasta el h6 por que es maximo heading que existe en html.
```

2- Cualquier elemento que tenga asignado el atributo "href" y que esté dentro de cualquier párrafo que a
su vez esté dentro de un bloque debe ser color negro.

```css
div p [href],
section p [href],
article p [href] {
    color: black;
}
```

3. El texto de las listas no ordenadas que estén dentro del bloque identificado como “ultimo” debe ser
  amarillo pero si es un enlace a otra página debe ser azul.

```css
#ultimo ul {
  color yellow
}
em a{
  color:blue;
}
```

4. Los elementos identificados como “importante” dentro de cualquier bloque deben ser verdes, pero si
  están dentro de un título deben ser rojos.

```css
#importante {
    color:green;
}
h1#importante, h2#importante, h3#importante, h4#importante, h5#importante, h6#importante {
    color: red;
}
```

5. Todos los elementos h1 que especifique el atributo title, cualquiera que sea su valor, deben ser azules

```css
h1[title]{
  color blue
}
```

Lo trabajo utilizando los selectores de atributos, Ej.:
E[foo] Equivale a cualquier elemento E con el atributo "foo" asignado (cualquier valor). 

6. El color de los enlaces en las listas ordenadas debe ser azul para los enlaces aún no visitados, y violeta
  para los ya visitados y, además, no deben aparecer subrayados.

```css
ol a:link {
    color: blue;       
    text-decoration: none;  
}

ol a:visited {
    color: violet;      
    text-decoration: none; 
}
```
```