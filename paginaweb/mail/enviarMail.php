<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = htmlspecialchars($_POST['nombres']);
    $correo = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $mensaje = htmlspecialchars($_POST['mensaje']);
    $producto = htmlspecialchars($_POST['product_name']);
    
    // Definir el correo al que se enviará el mensaje
    $to = "angelicarinconq1996@gmail.com";  // Cambia esto a tu dirección de correo
    $subject = "SOLICITUD".$producto;
    
    // Cuerpo del mensaje
    $body = "Has recibido un nuevo mensaje desde el formulario de contacto del producto: $producto.\n\n";
    $body .= "Nombre: $nombre\n";
    $body .= "Correo electrónico: $correo\n";
    $body .= "Correo electrónico: $telefono\n";
    $body .= "Mensaje:\n$mensaje\n";

    // Cabeceras del correo
    $headers = "From: $correo" . "\r\n" .
               "Reply-To: $correo" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Intentar enviar el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>¡Mensaje enviado con éxito!</p>";
    } else {
        echo "<p>Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo.</p>";
    }
} else {
    echo "<p>Por favor, envíe el formulario correctamente.</p>";
}
?>