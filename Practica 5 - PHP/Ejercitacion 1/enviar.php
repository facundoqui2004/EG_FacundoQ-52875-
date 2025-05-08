<?php
$fecha = date("d-m-Y");
$hora = date("H:i:s");

$destino = "turomeoynosanto@gmail.com";
$asunto = "Comentario";

// Validar y limpiar correo
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Correo electrónico no válido.");
}

// Encabezados MIME para contenido HTML
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

$comentario  = "Nombre: " . $_POST['nombre'] . "\n";
$comentario .= "Email: " . $email . "\n";
$comentario .= "Consulta: " . $_POST['texto'] . "\n";
$comentario .= "Enviado: " . $fecha . " a las " . $hora . "\n";

// Enviar correo
$enviado = mail($destino, $asunto, $comentario, $headers);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado del envío</title>
</head>
<body>
<?php if ($enviado): ?>
    <p>Su consulta ha sido enviada, en breve recibirá nuestra respuesta.</p>
<?php else: ?>
    <p>Hubo un error al enviar el mensaje. Inténtelo más tarde.</p>
<?php endif; ?>
</body>
</html>
