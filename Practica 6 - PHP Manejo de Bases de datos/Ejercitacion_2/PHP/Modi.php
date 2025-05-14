<?php
        include_once '../PHP/conexion.inc';
        $vId = $_POST['ID'];
        $vCiudad = $_POST['Ciudad'];
        $vPais = $_POST['Pais'];
        $vHabitantes = $_POST['Habitantes'];
        $vSuperficie = $_POST['Superficie'];
        $vMetros = $_POST['metro'];

        $vSql = "UPDATE ciudad_1 SET id ='$vId', ciudad ='$vCiudad', pais='$vPais', habitantes='$vHabitantes', superficie='$vSuperficie' WHERE id = '$vId'";

        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body id="MODphp">
    <header>
        <h1>Modificion Usuario</h1>
    </header>
    <main>
        <?php
            include_once '../PHP/conexion.inc';

            $vId = $_POST['ID'];
            $vCiudad = $_POST['Ciudad'];
            $vPais = $_POST['Pais'];
            $vHabitantes = $_POST['Habitantes'];
            $vSuperficie = $_POST['Superficie'];
            $vMetros = $_POST['metro'];
            //Arma la instrucción SQL y luego la ejecuta
            $vSql = "UPDATE ciudad_1 SET id ='$vId', ciudad ='$vCiudad', pais='$vPais', habitantes='$vHabitantes', superficie='$vSuperficie', metro='$vMetros' WHERE id = '$vId'";
            mysqli_query($link,$vSql) or die (mysqli_error($link));
        ?>
        <div class="anuncio">
            <h2>Ciudad Modificada</h2>
            <p>La ciudad <?php echo $vCiudad; ?> ha sido agregado correctamente.</p>
            <a href="../Index.html" class="btn btn-primary mt-2">Volver al Menu del ABML</a>
        </div>
        <?php
            mysqli_close($link);
        ?>
    </main>
    <footer>
        <h4>Ejercicio 2 ABML Ciudades</h4>
        <p>Facundo Quiñonez</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
