<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];

    // Gem dataene i en fil, database eller send dem til et e-mail system
    // Her er et eksempel med at gemme dem i en tekstfil:
    $file = 'tilmeldinger.txt';
    $current = file_get_contents($file);
    $current .= "Navn: " . $name . "\n";
    $current .= "Email: " . $email . "\n";
    $current .= "Adresse: " . $address . "\n";
    $current .= "----------------------\n";
    file_put_contents($file, $current);

    // Du kan også sende en bekræftelses-e-mail eller udføre andre handlinger her

    header("Location: tak.html"); // Redirect til en tak-side efter tilmelding
    exit();
}
?>