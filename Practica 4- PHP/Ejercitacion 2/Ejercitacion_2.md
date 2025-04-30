# Ejercicio 2:  
Indicar si los siguientes códigos son equivalentes.  

## a)  

### Código 1:  
```php  
<?php  
$i = 1;  
while ($i <= 10) {  
   print $i++;  
}  
?>  
```  

### Código 2:  
```php  
<?php  
$i = 1;  
while ($i <= 10):  
   print $i;  
   $i++;  
endwhile;  
?>  
```  

### Código 3:  
```php  
<?php  
$i = 0;  
do {  
   print ++$i;  
} while ($i < 10);  
?>  
```  

### Salida:  
```
12345678910  
12345678910  
12345678910  
```  

Se podría decir que son equivalentes, nada más que son distintas formas de implementar un `while`.  

- **while**: Itera a través de un bloque de código mientras una condición especificada sea verdadera.  
- **do-while**: El bucle primero ejecuta un bloque de código una vez, en cada caso, luego itera a través de ese bloque de código mientras una condición especificada sea verdadera.  
- **while : endwhile**: Es una forma de implementar las funciones, nada más que en vez de usar una llave se coloca el `:` al lado de la sentencia y el `end...` al final de la misma.  

## b)  

### Código 1:  
```php  
<?php  
for ($i = 1; $i <= 10; $i++) {  
   print $i;  
}  
?>  
```  

### Código 2:  
```php  
<?php  
for ($i = 1; ; $i++) {  
   if ($i > 10) {  
      break;  
   }  
   print $i;  
}  
?>  
```  

### Código 3:  
```php  
<?php  
$i = 1;  
for (;;) {  
   if ($i > 10) {  
      break;  
   }  
   print $i;  
   $i++;  
}  
?>  
```  

### Código 4:  
```php  
<?php  
for ($i = 1; $i <= 10; print $i, $i++) ;  
?>  
```  

### Salida:  
```
12345678910  
12345678910  
12345678910  
12345678910  
```  

- En la forma 1 del `for` es la normal.  
- La forma 2 es sacando el parámetro de fin y rompiendo el bucle con el `if` cuando se cumple la condición.  
- En la forma 3 se inicializa antes del bucle y después se implementa lo que se utiliza en las anteriores formas.  
- La forma 4 hace todo en una sola línea donde el primer parámetro inicializa, el segundo es la condición de fin y los parámetros donde está la `,` son los métodos que se ejecutan en la función.  

## c)  

### Código 1:  
```php  
<?php  
…  
if ($i == 0) {  
   print "i equals 0";  
} elseif ($i == 1) {  
   print "i equals 1";  
} elseif ($i == 2) {  
   print "i equals 2";  
}  
?>  
```  

### Código 2:  
```php  
<?php  
…  
switch ($i) {  
   case 0:  
      print "i equals 0";  
      break;  
   case 1:  
      print "i equals 1";  
      break;  
   case 2:  
      print "i equals 2";  
      break;  
}  
?>  
```  

Ambas estructuras son equivalentes en términos de funcionalidad básica (ambas comparan el valor de `$i` y ejecutan el bloque de código correspondiente).  

- **switch**: Para claridad en comparaciones múltiples de un mismo valor.  
- **if-elseif**: Para condiciones complejas o pocas opciones.  