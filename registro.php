<?php
require_once 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $stmt = $base->prepare("INSERT INTO usuarios (usuario, contrasena) VALUES (?, ?)");

    if ($stmt->execute([$usuario, $contrasena])) {
        header("Location: login.html");
        exit();
    } else {
        echo "Error al registrar usuario";
    }
}
?>
