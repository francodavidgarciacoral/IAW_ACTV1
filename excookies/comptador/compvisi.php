<?php
$visites = 0;

if(isset($_COOKIE["visites"])) {
    $visites = intval($_COOKIE["visites"]);
}

$visites++;
setcookie("visites", $visites, time() + 3600*24*30); 

$missatgeDescompte = "";

if($visites >= 10) {
    $missatgeDescompte = "Oferta exclusiva solo para ti! Utiliza el código <b>BOTIGA50</b> para obtener un 50% de descuento en tus primeras compras en la tienda";
}
else if($visites >= 5) {
    $missatgeDescompte = "¡Oferta exclusiva! Utiliza el código <b>BOTIGA20</b> para obtener un 20% de descuento en tus primeras compras en la tienda";
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Comptador de visites</title>
</head>
<body>

<h1>Bienvenido a la Botiga</h1>

    <p>Has visitado esta página <b><?php echo $visites; ?></b> veces.</p>

    <?php if($missatgeDescompte != ""): ?>
            <?php echo $missatgeDescompte; ?>    
    <?php endif; ?>

    <h2>Introduce un código de descuento:</h2>

    <form action= "compra.php" method="POST">
        <input type="text" name="codi" placeholder="Introduce el código">
        <button type="submit">Comprar</button>
    </form>

</body>
</html>
