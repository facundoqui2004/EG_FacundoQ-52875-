<?php
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
$texto = filter_var($_POST['texto'], FILTER_SANITIZE_STRING);

if(!empty($email) && !empty($nombre) && !empty($texto)) {
    $destino = "yyy@gmail.com":
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

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $nombre <$email.> "\r\n";
    $heaeders -= "Return-path: $destino\r\n";

    mail($destino, $asunto, $cuerpo, $headers);
    echo "<p>Mensaje enviado correctamente</p>";
}else {
    echo "<p>Por favor, completa todos los campos.</p>";
}
} else {
    echo "<p>Error al enviar el mensaje.</p>";
}
?>
