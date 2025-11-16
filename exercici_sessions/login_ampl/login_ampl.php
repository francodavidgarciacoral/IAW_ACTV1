<?php
include 'funciones.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $usuario = $_POST['usuario'] ?? '';
    $password = $_POST['password'] ?? '';

    if(validarUsuario($usuario, $password)){
        $_SESSION['usuario'] = $usuario; 
        header("Location: info1.php");
        exit();
    } else {
        echo "<p style='color:red;'>Usuari o contrasenya incorrectes. Torna a intentar-ho.</p>";
        echo "<a href='index.html'>Tornar al login</a>";
    }
} else {
    header("Location: index.html");
    exit();
}
?>
