<?php

include('../config/connection.php');  


session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $correo = $_POST['correo'];

 
    if (empty($correo)) {
        $_SESSION['error'] = "Por favor, ingrese su correo electrónico.";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }

 
    $stmt = $pdo->prepare("SELECT id, correo FROM usuarios WHERE correo = :correo");
    $stmt->bindParam(':correo', $correo);
    $stmt->execute();

 
    if ($stmt->rowCount() == 0) {
        $_SESSION['error'] = "No se encontró ninguna cuenta con ese correo electrónico.";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }

  
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $userId = $user['id'];

    
    $token = bin2hex(random_bytes(16));  

    
    $stmt = $pdo->prepare("INSERT INTO password_resets (user_id, token, created_at) VALUES (:user_id, :token, NOW())");
    $stmt->bindParam(':user_id', $userId);
    $stmt->bindParam(':token', $token);
    $stmt->execute();


    $resetLink = "http://localhost/mail/recuperar.php?token=$token";

   
    $subject = "Recuperación de contraseña";
    $message = "Hola,\n\nHemos recibido una solicitud para recuperar tu contraseña. Para restablecerla, haz clic en el siguiente enlace:\n\n$resetLink\n\nSi no solicitaste este cambio, por favor ignora este correo.";
    $headers = "From: no-reply@tusitio.com\r\n";
    $headers .= "Reply-To: no-reply@tusitio.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    
    if (mail($correo, $subject, $message, $headers)) {
        $_SESSION['success'] = "Hemos enviado un enlace para restablecer tu contraseña al correo proporcionado.";
    } else {
        $_SESSION['error'] = "Hubo un problema al enviar el correo. Por favor, intenta nuevamente más tarde.";
    }


    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
} else {

    header("Location: /paginaweb/paginaweb/pages/tutoriales.html");
    exit();
}
?>