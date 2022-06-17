<?php

$nombre = $_POST["name"];
$mail = $_POST["email"];
$mensaje = $_POST["textarea"];

$mensaje = "Mensaje enviado por " .$nombre .",\r\n";
$mensaje .= "Su email es: " . $mail ." \r\n";
$mensaje .= "Mensaje: " . $_POST["textarea"] . " \r\n";

$para = "msolcelis@gmail.com";
$asunto = "Mensaje enviado a traves de la web";



mail($para, $asunto, utf8_decode($mensaje));

header("Location:tnx.html");

?>