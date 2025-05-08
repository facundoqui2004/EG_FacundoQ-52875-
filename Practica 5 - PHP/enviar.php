<?php
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
$texto = filter_var($_POST['texto'], FILTER_SANITIZE_STRING);

if(!empty($email) && !empty($nombre) && !empty($texto)) {
    $destino = "turomeoynosanto@gmail.com":
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
    //dirección del remitente
    $headers .= "From: $nombre <$email.> "\r\n";
    $heaeders -= "Return-path: $destino\r\n";

    mail($destino, $asunto, $cuerpo, $headers);
    echo "<script>alert('Mensaje enviado correctamente');</script>";
}else {
    echo "<script>alert('Por favor, completa todos los campos.');</script>";
}
} else {
    echo "<script>alert('Error al enviar el mensaje.');</script>";
}
?>
