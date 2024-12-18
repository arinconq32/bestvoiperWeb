<?php

include('../config/connection.php');  

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $correo = $_POST['correo'];

    // Verificar si el correo está vacío
    if (empty($correo)) {
        header('Location: ' . $_SERVER['HTTP_REFERER'] . '?error=vacio');
        exit();
    }

    // Verificar si el correo está registrado
    $stmt = $pdo->prepare("SELECT id, correo FROM usuarios WHERE correo = :correo");
    $stmt->bindParam(':correo', $correo);
    $stmt->execute();

    // Si no se encuentra el correo
    if ($stmt->rowCount() == 0) {
        header('Location: ' . $_SERVER['HTTP_REFERER'] . '?error=no_existe');
        exit();
    }

    // Si el correo está registrado, generamos el token de recuperación
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $userId = $user['id'];

    $token = bin2hex(random_bytes(16));  

    // Insertamos el token en la base de datos
    $stmt = $pdo->prepare("INSERT INTO password_resets (user_id, token, created_at) VALUES (:user_id, :token, NOW())");
    $stmt->bindParam(':user_id', $userId);
    $stmt->bindParam(':token', $token);
    $stmt->execute();

    // Generamos el enlace de recuperación
    $resetLink = "http://localhost/mail/recuperar.php?token=$token";

    // Enviamos el correo
    $subject = "Recuperación de contraseña";
    $message = "Hola,\n\nHemos recibido una solicitud para recuperar tu contraseña. Para restablecerla, haz clic en el siguiente enlace:\n\n$resetLink\n\nSi no solicitaste este cambio, por favor ignora este correo.";
    $headers = "From: no-reply@tusitio.com\r\n";
    $headers .= "Reply-To: no-reply@tusitio.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Comprobamos si el correo fue enviado
    if (mail($correo, $subject, $message, $headers)) {
        header('Location: ' . $_SERVER['HTTP_REFERER'] . '?success=restablecer');
    } else {
        header('Location: ' . $_SERVER['HTTP_REFERER'] . '?error=error');
    }

    exit();
} else {

    // Si no se envía un POST, redirigimos a la página de tutoriales
    header("Location: /paginaweb/paginaweb/index.php");
    exit();
}
?>