# Ejercicio 5

## Analizar el siguiente ejemplo: Contador de visitas a una página web

### `contador.php`

```php
<?
// Archivo para acumular el numero de visitas
$archivo = "contador.dat";
// Abrir el archivo para lectura
$abrir = fopen($archivo, "r");
// Leer el contenido del archivo
$cont = fread($abrir, filesize($archivo));
// Cerrar el archivo
fclose($abrir);
// Abrir nuevamente el archivo para escritura
$abrir = fopen($archivo, "w");
// Agregar 1 visita
$cont = $cont + 1;
// Guardar la modificación
$guardar = fwrite($abrir, $cont);
// Cerrar el archivo
fclose($abrir);
// Mostrar el total de visitas
echo "<font face='arial' size='3'>Cantidad de visitas:".$cont."</font>";
?>
```

### `visitas.php`

```html
<!-- Página que va a contener al contador de visitas -->
<html>
  <head></head>
  <body>
    <? include("contador.php")?>
  </body>
</html>
```

En la misma carpeta, crear el archivo de texto `contador.dat`, con el valor inicial del contador y con permisos de lectura y escritura.

---

## Análisis antes de ejecución

En el código de `contador.php` se crea un archivo `contador.dat` (QUE NO SE VALIDA QUE EXISTA O DONDE CREARLO) al cual se le realizan muchas operaciones de escritura y apertura cada vez que se actualiza en cada apertura de página. Se saca el tamaño y se usa el `fread` que lee el número de bits del tamaño del archivo.

---

## Despues de la ejecución

Tuve que cambiar líneas de código para poder usar `contador.dat` o, al momento de crearlo, tendría que haber creado el archivo y agregarle `0` para inicializarlo, o usar `file_exist` para validar la existencia de este, ya que esta función devuelve un booleano.
