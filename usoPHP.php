<?php
session_start();

// Verificar si el usuario no está logueado
if (!isset($_SESSION['logueado']) || $_SESSION['logueado'] !== true) {
    header("Location: ../login.php"); // Redireccionar a la página de inicio de sesión
    exit();
}
?>