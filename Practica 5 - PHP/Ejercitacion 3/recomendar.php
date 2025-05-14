<?php
$mensaje_usuario = "";
$tipo_alerta = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n_remitente = $_POST["n_remitente"] ?? '';
    $e_remitente = $_POST["e_remitente"] ?? '';
    $n_destinatario = $_POST["n_destinatario"] ?? '';
    $e_destinatario = $_POST["e_destinatario"] ?? '';

    if (!empty($n_remitente) && !empty($e_remitente) && !empty($n_destinatario) && !empty($e_destinatario)) {
<<<<<<< HEAD
        $url = "http://www.sitio.com";
=======
        $url = "http://www.yyyy.com";
>>>>>>> 9f66846d0a5b75a79696a24f7184d2416731f26c
        $nombre_del_sitio = "Tu Sitio";
        $asunto = "$n_remitente te recomienda un sitio";

        $mensaje = "
        <html>
        <body>
            <p>Hola $n_destinatario:</p>
            <p><strong>$n_remitente</strong> te recomienda visitar <strong>$nombre_del_sitio</strong>.</p>
            <p>Podés verlo en <a href='$url'>$url</a></p>
            <p>¡Saludos!</p>
        </body>
        </html>";

        $encabezado  = "From: $e_remitente\r\n";
        $encabezado .= "Reply-To: $e_remitente\r\n";
        $encabezado .= "MIME-Version: 1.0\r\n";
        $encabezado .= "Content-Type: text/html; charset=UTF-8\r\n";

        if (mail($e_destinatario, $asunto, $mensaje, $encabezado)) {
            $mensaje_usuario = "El mensaje ha sido enviado. ¡Gracias por recomendarnos!";
            $tipo_alerta = "success";
        } else {
            $mensaje_usuario = "Hubo un error al enviar el mensaje. Intenta más tarde.";
            $tipo_alerta = "danger";
        }
    } else {
        $mensaje_usuario = "Por favor, completá todos los campos.";
        $tipo_alerta = "warning";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <?php if (!empty($mensaje_usuario)): ?>
            <div class="alert alert-<?= $tipo_alerta ?> text-center">
                <?= $mensaje_usuario ?>
            </div>
            <div class="text-center mt-4">
                <a href="index.html" class="btn btn-secondary">Volver al formulario</a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
