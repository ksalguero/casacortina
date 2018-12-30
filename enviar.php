<?php
// llamando a los campos 
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$producto = $_POST['producto'];
$mensaje = $_POST['mensaje'];

//Datos para el correo 

$destinatario = "ventascasacortina@gmail.com";
$asunto = "contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $email \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Producto: $producto \n";
$carta .= "Mensaje: $mensaje";


//enviando mensaje
mail($destinatario, $asunto, $carta);
header('Location:envio.html');


?>