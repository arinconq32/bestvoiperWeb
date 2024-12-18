<?php
// Inicia la sesión
session_start();

// Destruye todas las variables de sesión
session_unset();

// Destruye la sesión
session_destroy();

// Redirige al usuario a la página de inicio o login
header("Location: /paginaweb/index.php");  // Cambia index.php por la página que prefieras
exit();
?>