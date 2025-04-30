
# Ejercicio 3

## Explicar para qué se utiliza el siguiente código

### Código 1:
```html
<html>
<head><title>Documento 1</title></head>
<body>
<?php
echo "<table width = 90% border = '1' >";
$row = 5;
$col = 2;
for ($r = 1; $r <= $row; $r++) {
    echo "<tr>";
    for ($c = 1; $c <= $col; $c++) {
        echo "<td>&nbsp;</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";
?>
</body></html>
```

**Explicación:**  
Este código se utiliza para generar una tabla en el HTML de 2 filas y 5 columnas uniendo elementos de HTML con PHP.

---

### Código 2:
```html
<html>
<head><title>Documento 2</title></head>
<body>
<?php
if (!isset($_POST['submit'])) {
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Edad: <input name="age" size="2">
    <input type="submit" name="submit" value="Ir">
</form>
<?php
} else {
    $age = $_POST['age'];
    if ($age >= 21) {
        echo 'Mayor de edad';
    } else {
        echo 'Menor de edad';
    }
}
?>
</body></html>
```

**Explicación:**  
El siguiente código es un formulario de ingreso de edad, que se envía a la misma página. Dependiendo de lo que se cumpla en la sentencia `if`, mostrará en la pantalla si es mayor o menor de edad sin poder volver hacia atrás. Usa una supervariable global `_POST` que recupera la edad enviada por el formulario.
