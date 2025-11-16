<?php
date_default_timezone_set("Europe/Madrid"); 

$hora = date("H"); 
$minutos = date("i");
$segundos = date("s");

if ($hora >= 5 && $hora < 14) {
    $saludo = "Buenos días";
} elseif ($hora >= 14 && $hora < 19) {
    $saludo = "Buenas tardes";
} else {
    $saludo = "Buenas noches";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Saludo</title>
</head>
<body>

<h1><?php echo $saludo; ?></h1>
<p>La hora del servidor es: <strong><?php echo "$hora:$minutos:$segundos"; ?></strong></p>

<a href="index.html">Volver</a>

</body>
</html>
