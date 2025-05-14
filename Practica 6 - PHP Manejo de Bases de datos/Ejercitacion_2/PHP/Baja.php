<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baja Ciudad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body id="Bajaphp">
    <header>
        <h1>Baja Ciudad</h1>
    </header>
    <main>
        <?php
        include_once '../PHP/conexion.inc';
        $vID = $_POST['ID'];
        $vSql = "SELECT Count(id) as cantidad FROM ciudad_1 WHERE id = '$vID'";
        $vResultado = mysqli_query($link, $vSql) or die("Error en la consulta");
        $vCamtUsuarios = mysqli_fetch_assoc($vResultado);
        if ($vCamtUsuarios['cantidad']!=0){
            $vSql= "DELETE FROM ciudad_1 WHERE id = '$vID' ";
            mysqli_query($link, $vSql);
            ?>
            <div class="borrado">
                <h2>El Ciudad Borrada</h2>
                <a href="../Index.html" class="btn btn-primary mt-2">Volver al Menu del ABML</a>
            </div>
            <?php
        } 
        else {
            ?>
            <div class="error">
                <h2>La Ciudad no Existe</h2>
                <a href="../Index.html" class="btn btn-primary mt-2">Volver al Menu del ABML</a>
            </div>
            <?php
            
            }

            mysqli_free_result($vResultado);
    
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
