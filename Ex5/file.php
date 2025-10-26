<?php

$total = null;
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $price = $_POST["price"];
    $tax = $_POST["tax"];

    // Basic validation
    if (!is_numeric($price) || !is_numeric($tax) || $price < 0 || $tax < 0) {
        $error = "Please enter valid positive numbers for both fields.";
    } else {
        $total = $price + ($price * $tax / 100);
    }
}
?>