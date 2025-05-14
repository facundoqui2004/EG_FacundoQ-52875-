<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> Formulario de Modificación</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body id="Modiphp">
    
        <header>
            <h1>Modificación de Ciudades</h1>
        </header>
        <main>
            <div class="container mt-5">

            <?php
            include_once '../PHP/conexion.inc';

            // Captura de datos
            $vID = $_POST['ID'];
            // Consulta
            $vSql = "SELECT * FROM ciudad_1 WHERE id='$vID'";
            $vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));

            if (mysqli_num_rows($vResultado) == 0) {
                ?>
                <div class="error">
                    <h2>Ciudad Inexistente</h4>
                    <p>El Id ingresado no corresponde a ningúna Ciudad registrada.</p>
                    <hr>
                    <a href="../Index.html" class="btn btn-danger">Volver</a>
                </div>';
                <?php
            } else {
                $fila = mysqli_fetch_array($vResultado);
            ?>
            
                <form action="../PHP/Modi.php" method="POST" class="border p-4 rounded bg-light">
                    <div class="mb-3">
                        <label for="Ciudad" class="form-label">ID</label>
                        <input type="text" class="form-control" name="ID" id="ID" value="<?php echo htmlspecialchars($fila['id']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="Ciudad" class="form-label">Ciudad</label>
                        <input type="text" class="form-control" name="Ciudad" id="Ciudad" value="<?php echo htmlspecialchars($fila['ciudad']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="Pais" class="form-label">Pais</label>
                        <input type="text" class="form-control" name="Pais" id="Pais" value="<?php echo htmlspecialchars($fila['pais']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="Habitantes" class="form-label">Habitantes</label>
                        <input type="text" class="form-control" name="Habitantes" id="Habitantes" value="<?php echo htmlspecialchars($fila['habitantes']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="Superficie" class="form-label">Superficie</label>
                        <input type="text" class="form-control" name="Superficie" id="Superficie" value="<?php echo htmlspecialchars($fila['superficie']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="metro" class="form-label">Tiene Metro</label>
                        <input type="text" class="form-control" name="metro" id="metro" value="<?php echo htmlspecialchars($fila['metro']); ?>" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" value="Modificar">Modificar</button>
                    </div>
                </form>

            <?php
            }

            // Liberar y cerrar
            mysqli_free_result($vResultado);
            mysqli_close($link);
            ?>
            </div>
            <div id="comeBack" class="container mt-5">
            <p><a href="../Index.html">Volver al Menu del ABM</a></p>
        </div>
        </main>
        <footer>
            <h5>Ejercicio de Manejo de Bases de Datos</h5>
            <p>Facundo Quiñonez</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
