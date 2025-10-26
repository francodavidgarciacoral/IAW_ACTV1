<?php

date_default_timezone_set('Europe/Madrid');
$hour = date('G');
$current_time = date("h:i;s A"); // hour:minute:second uppercase "AM/PM"
$greeting = "this is a greeting"

//greeting
if ($hour >= 5 && $hour <14) {
    $greeting = "Bon dia!";
} elseif ($hour >= 14 && $hour <19) {
    $greeting = "Bona tarda!";
} else {
    $greeting = "Bona nit!";
}

//output
echo "<h2>$Greeting</h2>";
echo "<p>$current_time</p>";

?>