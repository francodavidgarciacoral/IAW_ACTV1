<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $choice = $_GET["music"];
   
    switch ($choice) {
        case "rock":
            $message = "¡Rock and roll! ¡Tienes una energía increíble!";
            break;
        case "pop":
            $message = "¡Te encantan los éxitos! ¡Siempre a la moda y con buen ritmo!";
            break;
        case "jazz":
            $message = "Elección sofisticada Tienes un gusto refinado.";
            break;
        case "classical":
            $message = "¡Elegante! Aprecias la belleza atemporal.";
            break;
        default:
            $message = "¡Qué gusto tan interesante!";
    }
} else {
    $message = "Por favor, selecciona un género musical primero.";
}
?>

<!DOCTYPE html>
<html lang="es">
<body>

<h1><?php echo $message; ?></h1>

<a href="index4.html">Volver</a>

</body>
</html>