<?php



$nombre = "Usuario";
$remitente= "usuario@mail.com";
$comentario= "
\n
Estimado:\n
Este es el scrip funcionando para el envio de mails.\n

";

$destino="wallywally26@hotmail.es";
$asunto="Practica 5- ejercicio 1";

$header = "From: $nombre <$desde>\r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-Type: text/html; charset=utf-8\r\n";

$contenido = 
"<html>
    <head>
     <title>Ejercicio 1</title>
    </head>
    <body>
        <h1>Scrip de envio de mail con HTML</h1>
        <div>
            <p><strong>Nombre:</strong> $nombre</p>
            <p><strong>Correo:</strong> $remitente</p>
            <p><strong>Mensaje:</strong> $comentario</p>
        </div>
    </body>
</html>";

if (mail($destino,$asunto,$contenido,$header)){
  echo "Envio de correo de forma exitosa.";
} else {
  echo "Fallo el envio de correo";
};
?>