# Ejercicio 1: Completar

## Consulta a una base de datos

Para comenzar la comunicación con un servidor de base de datos MySQL, es necesario abrir una conexión a ese servidor. Para inicializar esta conexión, PHP ofrece la función:

- `mysqli_connect` (`mysql_connect`)

Todos sus parámetros son opcionales, pero hay tres de ellos que generalmente son necesarios:

- ($hostname, $nombreUsuario, $contraseña)

Una vez abierta la conexión, se debe seleccionar una base de datos para su uso, mediante la función:

- `mysqli_select_db` (`mysql_select_db`)

Esta función debe pasar como parámetro:

- ($nombreConexión, $nombreBaseDatos)

La función `mysqli_query()` se utiliza para:

- Permite ejecutar una consulta a la base de datos que especifiquemos.

y requiere como parámetros:

- ($nombreConexion, "Consulta aquí")

La cláusula `or die()` se utiliza para:

- Detiene la ejecución si hay un error.

y la función `mysqli_error()` se puede usar para:

- Devuelve el último mensaje de error.

Si la función `mysqli_query()` es exitosa, el conjunto resultante retornado se almacena en una variable, por ejemplo `$vResult`, y a continuación se puede ejecutar el siguiente código (explicarlo):

```php
<?php
    while ($fila = mysqli_fetch_array($vResultado))
    {
        ?>
            <tr>
                <td><?php echo ($fila[0]); ?></td>
                <td><?php echo ($fila[1]); ?></td>
                <td><?php echo ($fila[2']); ?></td>
            </tr>
            <tr>
                <td colspan="5">
            <?php
    }
    mysqli_free_result($vResultado);
    mysqli_close($link);
?>
```

En este caso se ejecuta un while donde se obtiene el array asociado a la fila obtenida o NULL si no hubiera mas fila, por lo que se ejecuta el codigo mientras sigan habiendo filas y una vez en el NULL, finaliza el codigo.  
Dentro del while lo que sucede es que la fila va a tener 3 Columnas por lo que se va a ir mostrando el contenido de estas 3 Columnas y luego  se habre una nueva fila la cual ocupara 5 columnas completas y estara vacia.  
Cerrado el bucle del while la función `mysqli_free_result($result);` libera la memoria que se usó para almacenar el resultado de una consulta con mysqli_query y se cierra la conexion con la base de datos con `mysqli_close($link);`.