<?php
$nombre = $_POST['nombre'];
$mail= $_POST['mail'];
$telefono= $_POST['telefono'];
$motivo= $_POST['motivo'];
$mensaje= $_POST['mensaje'];

$header = 'From: '.$mail." \r\n";
$header .= "X-Mailer: PHP/". phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por: ".$nombre." \r\n";
$mensaje .= "Su e-mail es: ". $mail . " \r\n";
$mensaje .= "Telefono de contacto: " . $telefono . " \r\n";
$mensaje .= "Motivo del ocntacto: " . $motivo . " \r\n";
$mensaje .= "Mensaje: ". $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el: " . date('d/m/Y', time());

$para = "cesar_l_diaz570@hotmail.com";
$asunto = "Nuevo contacto de la Web";

mail($para, $asunto, utf8_decode($mensaje), $header);
header ('Location:index.html');

?>
