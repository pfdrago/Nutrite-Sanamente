<?php

$nombre = $_POST["name"];
$mail = $_POST["email"];
$mensaje = $_POST["textarea"];

$mensaje = "Mensaje enviado por " .$nombre .",\r\n";
$mensaje = "Su email es " .$email .",\r\n";
$mensaje = "Mensaje: " .$_POST["mensaje"] .",\r\n";

$para = "msolcelis@gmail.com";
$asunto = "Mensaje enviado a traves de la web";

mail($para, $asunto, utf8_decode($mensaje), $header );

header("location:tnx.html");

?>