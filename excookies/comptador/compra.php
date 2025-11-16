<?php
$codi = $_POST["codi"] ?? "";

$descompte = 0;

if($codi === "BOTIGA20") {
    $descompte = 20;
} 
else if($codi === "BOTIGA50") {
    $descompte = 50;
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Compra</title>
</head>
<body>

<h1>Resultado de la compra</h1>

<?php if($descompte > 0): ?>
    <p>Código correcto! Tienes un <?php echo $descompte; ?>% de descuento.</p>
<?php else: ?>
    <p>El código no es válido.</p>
<?php endif; ?>

<a href="compvisi.php">Volver</a>

</body>
</html>
