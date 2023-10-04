<?php
session_start();

// Si el usuario no ha iniciado sesión, muestra el formulario de registro
if (!isset($_SESSION['usuario'])) {
    if (isset($_POST['nombre_completo'], $_POST['correo'], $_POST['usuario'], $_POST['contrasena'])) {
        // Procesa los datos del formulario de registro
        $nombre_completo = $_POST['nombre_completo'];
        $correo = $_POST['correo'];
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];

      

        // Después del registro exitoso, redirige al usuario a la página de la pastelería
        header("Location: index.php");
        exit;
    } }