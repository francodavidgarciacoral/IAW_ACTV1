<?php
$majoredat = $_COOKIE['majoredat'] ?? '';
$idioma = $_COOKIE['idioma'] ?? 'cat';
$moneda = $_COOKIE['moneda'] ?? 'EUR';

if($majoredat != 'si'){
    if($idioma == 'cat') $mensajeEdad = "No et podem vendre alcohol si ets menor d'edat.";
    if($idioma == 'esp') $mensajeEdad = "No podemos venderte alcohol si eres menor de edad.";
    if($idioma == 'eng') $mensajeEdad = "We cannot sell alcohol if you are underage.";
    $productos = [];
} else {
    $mensajeEdad = '';
    $productos = [
        [
            'nom' => ['cat'=>'Les Terrasses','esp'=>'Les Terrasses','eng'=>'Les Terrasses'],
            'preuEUR'=>39
        ],
        [
            'nom' => ['cat'=>'Vi Negre Premium','esp'=>'Vino Tinto Premium','eng'=>'Premium Red Wine'],
            'preuEUR'=>25
        ]
    ];

    $tasaCambio = ['EUR'=>1, 'GBP'=>0.88, 'USD'=>1.10]; 
    foreach($productos as &$prod){
        $prod['preu'] = $prod['preuEUR'] * $tasaCambio[$moneda];
    }
}

$titulos = [
    'cat'=>'Productes disponibles:',
    'esp'=>'Productos disponibles:',
    'eng'=>'Available products:'
];
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Bodega - Informacion</title>
</head>
<body>
    <h1>Bodega</h1>
    <?php if($mensajeEdad): ?>
        <p style="color:red; font-weight:bold;"><?php echo $mensajeEdad; ?></p>
    <?php else: ?>
        <h2><?php echo $titulos[$idioma]; ?></h2>
        <ul>
            <?php foreach($productos as $prod): ?>
                <li>
                    <?php echo $prod['nom'][$idioma]; ?> - 
                    <?php 
                        if($moneda=='EUR') echo number_format($prod['preu'],2)." €";
                        if($moneda=='GBP') echo "£".number_format($prod['preu'],2);
                        if($moneda=='USD') echo "$".number_format($prod['preu'],2);
                    ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>
