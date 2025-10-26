<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["music"])) {
    $choice = $_POST["music"];
   
    switch ($choice) {
        case "rock":
            $message = "Rock on! 🎸 You’ve got great energy!";
            break;
        case "pop":
            $message = "You love the hits! 🎤 Always trendy and upbeat!";
            break;
        case "jazz":
            $message = "Smooth choice 🎷 You’ve got refined taste.";
            break;
        case "classical":
            $message = "Elegant! 🎻 You appreciate timeless beauty.";
            break;
        default:
            $message = "Interesting taste!";
    }
} else {
    $message = "Please select a music genre first.";
}
?>