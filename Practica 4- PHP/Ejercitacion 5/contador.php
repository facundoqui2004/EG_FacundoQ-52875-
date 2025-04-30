<?php
// Archivo para acumular el número de visitas
$archivo = "contador.dat";

// // Validar si el archivo existe, si no, crearlo con valor 0
// if (!file_exists($archivo)) {
//     $crear = fopen($archivo, "w");
//     fwrite($crear, "0");
//     fclose($crear);
// }
$crear = fopen($archivo, "w");
fwrite($crear, "0");
fclose($crear);
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

// Mostrar el total de visitas (con HTML moderno)
echo "<p style='font-family: arial; font-size: 16px;'>Cantidad de visitas: " . htmlspecialchars($cont) . "</p>";
?>