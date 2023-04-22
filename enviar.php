<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los valores de los campos del formulario
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $mensaje = $_POST["mensaje"];

  // Establecer la dirección de correo electrónico a la que se enviará el mensaje
  $destinatario = "destinatario@ejemplo.com";

  // Establecer el asunto del mensaje
  $asunto = "Nuevo mensaje de " . $nombre;

  // Construir el cuerpo del mensaje
  $cuerpo = "Nombre: " . $nombre . "\n\nEmail: " . $email . "\n\nMensaje: " . $mensaje;

  // Enviar el mensaje utilizando la función mail de PHP
  if (mail($destinatario, $asunto, $cuerpo)) {
    echo "Mensaje enviado correctamente.";
  } else {
    echo "Error al enviar el mensaje.";
  }
}
?>
