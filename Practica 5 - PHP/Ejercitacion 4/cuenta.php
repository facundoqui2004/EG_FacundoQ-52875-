<?php
session_start();

if (!isset($_SESSION["contador"])) {
    $_SESSION["contador"] = 1;
} else {
    $_SESSION["contador"]++;
}
?>

<html>
<body>
    <p>Has visitado <?= $_SESSION["contador"] ?> páginas</p>
    <a href="cant_visitas.php">Otra página</a>
</body>
</html>
