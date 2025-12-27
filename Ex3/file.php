<?php

date_default_timezone_set('UTC');
$hour = date('G');
$current_time = date('h:i:s A'); 
$greeting = "this is a greeting";

if ($hour >= 5 && $hour <14) {
    $greeting = "Bon dia!";
} elseif ($hour >= 14 && $hour <19) {
    $greeting = "Bona tarda!";
} else {
    $greeting = "Bona nit!";
}

echo "<h2>$greeting</h2>";
echo "<p>$current_time</p>";

?>