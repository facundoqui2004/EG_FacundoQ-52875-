# Ejercicio 1

En el siguiente código identificar:  
- Las variables y su tipo  
- Los operadores  
- Las funciones y sus parámetros  
- Las estructuras de control  
- Cuál es la salida por pantalla  

```php
<?php
   function doble($i) {
      return $i*2;
   }
$a = TRUE;
$b = "xyz";
$c = 'xyz';
$d = 12;
echo gettype($a);
echo gettype($b);
echo gettype($c);
echo gettype($d);

if (is_int($d)) {
   $d += 4;
}
if (is_string($a)) {
   echo "Cadena: $a";
}
$d = $a ? ++$d : $d*3;
$f = doble($d++);
$g = $f += 10;
echo $a, $b, $c, $d, $f , $g;
echo gettype($f);
echo gettype($g);
?>
```

## Respuestas  

### Variables y su tipo  
- `a` es una variable del tipo **boolean**  
- `b` es una variable del tipo **string**  
- `c` es una variable del tipo **string**  
- `d` es una variable del tipo **integer**  
- `f` es una variable del tipo **integer**  
- `g` es una variable del tipo **integer**  

### Los operadores  
- `=` Asignación básica  
- `?:` Operador ternario `$value = <operator> ? <true value> : <false value>` funciona como el `if`, siendo que la sentencia `true` se ejecuta dependiendo del operador y el `false` lo mismo  
- `++var` Incrementar y retornar  
- `var++` Retorna e incrementa después  
- `+=` Asignación combinada  

### Funciones y sus parámetros  
- `is_` funciones que devuelven booleanos que preguntan el tipo de valor que tienen  
- `gettype` función que devuelve el tipo de una variable  
- `echo` función que retorna el parámetro en pantalla  
- `function doble($i)` función a la que se llama para realizar el doble de un valor  
- `return` devuelve el valor  

### Estructuras de control  
- `if`  

### Salida por pantalla  
La salida en pantalla es:  
`booleanstringstringinteger1xyzxyz184444integerinteger`  