<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pobieranie danych z formularza
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Przygotowanie wiadomości do zapisu
    $entry = "Imię: $name\nEmail: $email\nWiadomość: $message\n\n";
    
    // Zapisywanie wiadomości do pliku tekstowego
    file_put_contents("messages.txt", $entry, FILE_APPEND);

    // Przekierowanie na stronę z potwierdzeniem lub główną
    header("Location: kontakt.html?status=success");
    exit();
}
?>
