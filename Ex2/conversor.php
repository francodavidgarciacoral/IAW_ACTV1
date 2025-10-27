<?php
$tasaEuroDolar = 1.08;
$cantidad = $_GET['cantidad'] ?? 0;
$tipo = $_GET['tipo'] ?? '';
$resultado = 0;
$mensaje = "";

if ($tipo === 'euroAdolar') {
    $resultado = $cantidad * $tasaEuroDolar;
    $mensaje = "{$cantidad} Euros (€) equivalen a " . number_format($resultado, 2) . "  Dolares.";
} elseif ($tipo === 'dolarAeuro') {
    $resultado = $cantidad / $tasaEuroDolar; 
    $mensaje = "{$cantidad} Dolares ($) equivalen a " . number_format($resultado, 2) . "Euros.";
} else {
    $mensaje = "Por favor, especifica una cantidad y un tipo de conversion.";
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Resultado Conversion</title>
</head>
<body>
    <h1>Resultado de la Conversión</h1>
    <p><?= $mensaje ?></p>
    <br>
    <a href="/ex2/index2.html">Volver al conversor</a>
</body>
</html>