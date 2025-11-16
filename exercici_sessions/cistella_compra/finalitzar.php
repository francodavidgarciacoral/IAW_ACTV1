<?php
session_start();

$cistella = $_SESSION['cistella'] ?? null;

$preus = [
    'terrasses' => 39,
    'blanc' => 25
];
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Resum de la compra</title>
</head>
<body>
    <h1>Resum de compra</h1>

    <?php if (!$cistella || ($cistella['terrasses']==0 && $cistella['blanc']==0)): ?>
        <p>No hi ha productes a la cistella.</p>
        <a href="index.html">Tornar a la botiga</a>
    <?php else: ?>

        <ul>
            <?php
            $total = 0;

            if ($cistella['terrasses'] > 0) {
                $subtotal = $cistella['terrasses'] * $preus['terrasses'];
                $total += $subtotal;
                echo "<li>Les Terrasses × {$cistella['terrasses']} = {$subtotal} €</li>";
            }

            if ($cistella['blanc'] > 0) {
                $subtotal = $cistella['blanc'] * $preus['blanc'];
                $total += $subtotal;
                echo "<li>Vi Blanc Premium × {$cistella['blanc']} = {$subtotal} €</li>";
            }
            ?>
        </ul>

        <h2>Total: <?php echo $total; ?> €</h2>

        <a href="confirmar.php">
            <button>Confirmar compra</button>
        </a>
    <?php endif; ?>
</body>
</html>
