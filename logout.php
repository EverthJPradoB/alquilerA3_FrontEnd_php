<?php
// Iniciar sesión
session_start();

// Eliminar todas las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();

// Verificar si las variables de sesión han sido eliminadas
if (count($_SESSION) === 0) {
    header('Location: index.php');
} else {
    echo "Error al eliminar las variables de sesión o destruir la sesión.";
}
