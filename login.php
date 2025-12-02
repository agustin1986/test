<?php
require_once 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $stmt = $base->prepare("SELECT * FROM usuarios WHERE usuario = ? AND contrasena = ?");
    $stmt->execute([$usuario, $contrasena]);

    if ($stmt->rowCount() > 0) {
        header("Location: receta.php");
        exit();
    } else {
        echo "Usuario o contraseña incorrectos";
    }
}
?>
