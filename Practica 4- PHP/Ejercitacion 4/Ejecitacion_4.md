# Ejercicio 4:

Si el archivo `datos.php` contiene el código que sigue:

```php
<?php
$color = 'blanco';
$flor = 'clavel';
?>
```

Indicar las salidas que produce el siguiente código. Justificar.

```php
<?php
echo "El $flor $color \n";
include 'datos.php';
echo " El $flor $color";
?>
```

Este código incluye los datos o el código de la función `datos.php`, siendo esta expresión `include` incluye y evalúa el archivo especificado.  

Pero el código va a tener un error en la forma en la que se escribió ya que en la línea 2 del código principal se usa mal la forma de comentar ya que se incluyen variables de la forma `$var`, por lo que para comentar y mostrar esto se comenta con `''`.  
Para ejecutarlo tuve que cambiar esa parte del código.
