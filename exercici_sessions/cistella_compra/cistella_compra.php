<?php
session_start();

$prod = $_POST['producte'] ?? '';
$quant = intval($_POST['quantitat'] ?? 0);

if ($quant > 0) {
    if (!isset($_SESSION['cistella'])) {
        $_SESSION['cistella'] = [
            'terrasses' => 0,
            'blanc' => 0
        ];
    }

    $_SESSION['cistella'][$prod] += $quant;
}

header("Location: index.html");
exit();
?>
