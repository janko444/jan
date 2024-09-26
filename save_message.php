<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Zapisujemy wiadomości do pliku
    $file = 'messages.txt';
    $current = file_get_contents($file);
    $current .= "Imię: $name\nEmail: $email\nWiadomość: $message\n\n";
    file_put_contents($file, $current);

    // Przekierowanie na stronę z potwierdzeniem
    header('Location: kontakt.html?success=1');
    exit();
}
?>
