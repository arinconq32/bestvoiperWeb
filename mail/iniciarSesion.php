<?php
// Incluir el archivo de conexión a la base de datos
include('../config/connection.php');


// Verificar si se ha enviado el formulario por el método POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Obtener los valores enviados desde el formulario
    $correo = $_POST['correo'];
    $pass = $_POST['pass'];

    // Verificar si los campos están vacíos
    if (empty($correo) || empty($pass)) {
        echo "<p style='color: red;'>Por favor, ingresa todos los campos.</p>";
    } else {
    
        // Preparar la consulta SQL para buscar al usuario por correo
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE correo = :correo");
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();
        
        // Obtener el usuario de la base de datos
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verificar si el usuario existe
        if ($user) {
            // Verificar si la contraseña es correcta
            if (password_verify($pass, $user['pass'])) {
                // Iniciar la sesión
                session_start();
                $_SESSION['id'] = $user['id'];
                $_SESSION['correo'] = $user['correo'];
        
                // Redirigir a la página de tutoriales
                header("Location: /paginaweb/pages/tutoriales.php");
               
               
            } else {
                // Si la contraseña es incorrecta, redirigimos con el mensaje en la URL
                header("Location: /paginaweb/pages/admin.php?error=contraseña_incorrecta");
                exit();
            }
        } else {
            // Si el correo no está registrado, redirigimos con el mensaje en la URL
            header("Location: /paginaweb/pages/admin.php?error=correo_no_registrado");
            exit();
        }
    }
}
?>