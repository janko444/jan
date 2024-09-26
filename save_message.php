<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Zapisz wiadomość do pliku lub bazy danych, np. plik .txt
    $file = fopen("messages.txt", "a");
    fwrite($file, "Imię: $name\nEmail: $email\nWiadomość: $message\n\n");
    fclose($file);

    http_response_code(200); // Status 200 OK
} else {
    http_response_code(405); // Status 405 Method Not Allowed
}
?>
