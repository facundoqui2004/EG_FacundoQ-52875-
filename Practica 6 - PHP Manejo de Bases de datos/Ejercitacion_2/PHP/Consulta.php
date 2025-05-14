<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Completo</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <?php
    include_once '../PHP/conexion.inc';
    $vSql = "SELECT * FROM ciudad_1";
    $vResultado = mysqli_query($link, $vSql) or die("Error en la consulta");
    $total_registros = mysqli_num_rows($vResultado);
    ?>
    <header>
        <h1>Listado Completo</h1>
    </header>
    <main id="Consulta">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ciudad</th>
                    <th>Pais</th>
                    <th>Habitantes</th>
                    <th>Superficie</th>
                    <th>Tiene metro</th>
                </tr>
                <?php
                while ($fila = mysqli_fetch_array($vResultado)) {
                ?>
                <tr>
                    <td><?php echo $fila['id']; ?></td>
                    <td><?php echo $fila['ciudad']; ?></td>
                    <td><?php echo $fila['pais']; ?></td>
                    <td><?php echo $fila['habitantes']; ?></td>
                    <td><?php echo $fila['superficie']; ?></td>    
                    <td><?php echo $fila['metro']; ?></td>
                </tr>
                <?php
                }
                // Liberar conjunto de resultados
                mysqli_free_result($vResultado);
                // Cerrar la conexion
                mysqli_close($link);
                ?>
                
                
            </thead>
            
        </table>
        <div id="comeBack" class="container mt-5">
            <p><a href="../Index.html">Volver al Menu del ABM</a></p>
        </div>
        
    </main>
    <footer>
        <p>&copy; Facundo Quiñonez</p>    
    </footer>
    
</body>
</html>