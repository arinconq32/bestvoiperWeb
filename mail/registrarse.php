<?php

include('../config/connection.php');

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $correo = trim($_POST['correo']);
    $pass = trim($_POST['pass']);
    $passConfirm = trim($_POST['passConfirm']);

    // Verificar si los campos están vacíos
    if (empty($correo) || empty($pass) || empty($passConfirm)) {
        header("Location: /paginaweb/pages/registro.php?error=campos_obligatorios");
        exit;
    }

    // Verificar si las contraseñas coinciden
    if ($pass !== $passConfirm) {
        header("Location: /paginaweb/pages/registro.php?error=no_coinciden");
        exit;
    }

    // Verificar si el correo es válido
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        header("Location: /paginaweb/pages/registro.php?error=correo_novalido");
        exit;
    }

    try {
        // Comprobar si el correo ya está registrado
        $sql = "SELECT id FROM usuarios WHERE correo = :correo";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            header("Location: /paginaweb/pages/registro.php?error=correo_yaregistrado");
            exit;
        }

        // Hashear la contraseña
        $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

        // Insertar el nuevo usuario
        $sql = "INSERT INTO usuarios (correo, pass) VALUES (:correo, :pass)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':pass', $hashedPassword);

        if ($stmt->execute()) {
            header("Location: /paginaweb/pages/admin.php?success=registro_exitoso");
        } else {
            header("Location: /paginaweb/pages/registro.php?error=error_registro");
        }

    } catch (PDOException $e) {
        header("Location: /paginaweb/pages/registro.php?error=error" . urlencode("Error: " . $e->getMessage()));
    }
}
?>