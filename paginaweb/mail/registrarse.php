<?php

include('../config/connection.php');


session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $correo = trim($_POST['correo']);
    $pass = trim($_POST['pass']);
    $passConfirm = trim($_POST['passConfirm']);

    
    if (empty($correo) || empty($pass) || empty($passConfirm)) {
        echo "Todos los campos son obligatorios.";
        exit;
    }

   
    if ($pass !== $passConfirm) {
        echo "Las contraseñas no coinciden.";
        exit;
    }

   
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo "El correo electrónico no es válido.";
        exit;
    }

    try {
        
        $sql = "SELECT id FROM usuarios WHERE correo = :correo";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();

       
        if ($stmt->rowCount() > 0) {
            echo "El correo electrónico ya está registrado.";
            exit;
        }

       
        $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

      
        $sql = "INSERT INTO usuarios (correo, pass) VALUES (:correo, :pass)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':pass', $hashedPassword);


        if ($stmt->execute()) {
            echo "¡Te has registrado con éxito!";
      
            header("Location: /paginaweb/paginaweb/pages/admin.html");
        } else {
            echo "Error al registrar el usuario.";
        }

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>