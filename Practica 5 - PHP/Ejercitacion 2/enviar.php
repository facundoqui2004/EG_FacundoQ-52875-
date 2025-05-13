<?php
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
$texto = filter_var($_POST['texto'], FILTER_SANITIZE_STRING);

if(!empty($email) && !empty($nombre) && !empty($texto)) {
    $destino = "yyyy@gmail.com";
    $asunto = "Mensaje de contacto desde la web";

    $cuerpo = '
    <html>
    <head>
        <title>Mensaje de contacto</title>  
    </head>
    <body>
        <h1>Mensaje de contacto</h1>
        <p><strong>Nombre:</strong> '.$nombre.'</p>
        <p>'.$texto.'</p>
    </body>
    </html>';

    // Para el envio en HTML
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    // dirección del remitente
    $headers .= "From: $nombre <$email>" . "\r\n";
    $headers .= "Return-path: $destino" . "\r\n";

    if(mail($destino, $asunto, $cuerpo, $headers)) {
        echo "<p>Mensaje enviado correctamente.</p>";

    } else {
        echo "<p>Error al enviar el mensaje.</p>";

    }
} else {
    echo "<p>Por favor, completa todos los campos</p>";
}
?>
