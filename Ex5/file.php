<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $price = $_GET["price"];
    $tax = $_GET["tax"];

    if (!is_numeric($price) || !is_numeric($tax) || $price < 0 || $tax < 0) {
        $message = "⚠️ Please enter valid positive numbers.";
    } else {
        $tax_amount = $price * $tax / 100;
        $total = $price + $tax_amount;
        $message = "Price: €" . number_format($price, 2) . "<br>" .
                   "Tax (" . number_format($tax, 2) . "%): €" . number_format($tax_amount, 2) . "<br>" .
                   "<strong>Total: €" . number_format($total, 2) . "</strong>";
    }
} else {
    $message = "No data received.";
}
?>
<!DOCTYPE html>
<html lang="en">
<body>

<div class="result">
    <h2>Result</h2>
    <p><?php echo $message; ?></p>
    <a href="taxcalc.html">Go back</a>
</div>

</body>
</html>