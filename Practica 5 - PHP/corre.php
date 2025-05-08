<?php
// Configuración básica
$fecha = date("d-m-Y");
$hora = date("H:i:s");
$destino = "facundoq654@gmail.com";
$asunto = "Comentario del sitio web";

// Validación de datos
$nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$texto = filter_var($_POST['texto'], FILTER_SANITIZE_STRING);

if (!$email) {
    die("Correo electrónico no válido.");
}

// Construcción del cuerpo en HTML
$cuerpo = "
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='iso-8859-1'>
    <title>$asunto</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #f4f4f4; padding: 10px; text-align: center; }
        .info { margin: 15px 0; }
        .mensaje { background-color: #f9f9f9; padding: 15px; border-left: 4px solid #ccc; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h2>Nuevo mensaje de contacto</h2>
        </div>
        
        <div class='info'>
            <p><strong>Nombre:</strong> $nombre</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Fecha:</strong> $fecha a las $hora</p>
        </div>
        
        <div class='mensaje'>
            <h3>Mensaje:</h3>
            <p>".nl2br($texto)."</p>
        </div>
    </div>
</body>
</html>
";

// Configuración de cabeceras MIME
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: $nombre <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
// $headers .= "Cc: copia@example.com\r\n"; // Descomentar si necesitas CC
// $headers .= "Bcc: copiaoculta@example.com\r\n"; // Descomentar si necesitas BCC

// Envío del correo
$enviado = mail($destino, $asunto, $cuerpo, $headers);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado del envío</title>
</head>
<body>
    <?php if ($enviado): ?>
        <h2>¡Mensaje enviado con éxito!</h2>
        <p>Gracias por contactarnos, $nombre. Hemos recibido tu mensaje y te responderemos a la brevedad.</p>
    <?php else: ?>
        <h2>Error al enviar el mensaje</h2>
        <p>Lo sentimos, ha ocurrido un error al intentar enviar tu mensaje. Por favor, inténtalo nuevamente más tarde.</p>
        <p>Detalles del error: <?php echo error_get_last()['message'] ?? 'Desconocido'; ?></p>
    <?php endif; ?>
    
    <p><a href="formulario.html">Volver al formulario</a></p>
</body>
</html>