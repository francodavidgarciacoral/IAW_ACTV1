<?php
include 'funciones.php';
comprobarSesion();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página de información 1</title>
</head>
<body>
    <?php mostrarUsuario(); ?>
    <h1>Contenido de la página 1</h1>
    <p>Información reservada para usuarios registrados.</p>
    <a href="info2.php">Ir a página 2</a>
</body>
</html>
