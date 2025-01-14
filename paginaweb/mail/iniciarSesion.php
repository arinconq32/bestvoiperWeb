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
                header("Location: /paginaweb/paginaweb/pages/tutoriales.html");
                exit();
            } else {
                // Si la contraseña es incorrecta
                echo "<p style='color: red;'>Contraseña incorrecta.</p>";
            }
        } else {
            // Si el correo no está registrado
            echo "<p style='color: red;'>El correo no está registrado.</p>";
        }
    }
}
?>