<!-- Tenemos que guardar en variables la informacion de los distintos inputs (nombre, email, etc) del form para luego mandarlo al mail -->
<?php

$asunto = $_POST ['asunto']
$mensaje = $_POST ['campo-de-mensaje']

// Como nos va a llegar el cuerpo del mail

$mensaje = "El asunto es: " . $asunto . ",\r\n";
$mensaje .= "Mensaje: " . $_POST ['mensaje'] . ",\r\n";
$mensaje .= "Enviado el " . date('d/m/y', time());

$destinatario = 'niconunez.2104@gmail.com';

// Función mail

mail($destinatario, $asunto, utf8_decode($mensaje), $header);

header('Location:exito.html');

?>
