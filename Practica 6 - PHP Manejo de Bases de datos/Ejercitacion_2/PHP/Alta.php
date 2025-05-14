<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body id="Altaphp">
    <header>
        <h1>Alta Ciudades</h1>
    </header>
    <main>
        <?php
        include_once '../PHP/conexion.inc';
        $vId = $_POST['ID'];
        $vCiudad = $_POST['ciudad'];
        $vPais = $_POST['Pais'];
        $vHabitantes = $_POST['habi'];
        $vSuperficie = $_POST['Sup'];
        $vMetros = $_POST['metro'];

        $vSql = "SELECT Count(id) as cantidad FROM ciudad_1 WHERE id = '$vId'";
        $vResultado = mysqli_query($link, $vSql) or die("Error en la consulta");
        $vCamtCiudades = mysqli_fetch_assoc($vResultado);
        if ($vCamtCiudades['cantidad']!=0){
            ?>
            <div class="error">
                <h2>La Ciudad ya Existe</h2>
                <a href="../Index.html" class="btn btn-primary mt-2">Volver al Menu del ABML</a>
            </div>
            <?php
        } 
        else {
            $vSql = "INSERT INTO ciudad_1 (id,ciudad,pais,habitantes,superficie,metro) VALUES ('$vId','$vCiudad','$vPais','$vHabitantes','$vSuperficie','$vMetros')";
            mysqli_query($link, $vSql) or die("Error en la consulta");
            ?>
            <div class="anuncio">
                <h2>Ciudad Agregada</h2>
                <p>La ciudad <?php echo $vCiudad; ?> ha sido agregada correctamente.</p>
                <a href="../Index.html" class="btn btn-primary mt-2">Volver al Menu del ABM</a>
            </div>
            <?php
            // Liberar conjunto de resultados
            mysqli_free_result($vResultado);
            }
            // Cerrar la conexion
            mysqli_close($link);
            ?>
    </main>
    <footer>
        <h4>Ejercicio de Manejo de Bases de Datos</h4>
        <p>Facundo Quiñonez</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
