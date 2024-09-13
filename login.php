<?php
// Konfiguracja połączenia z bazą danych
$servername = "localhost";
$username = "root"; // Zmien na swojego uzytkownika bazy danych
$password = ""; // Zmien na swoje haslo do bazy danych
$dbname = "your_database_name"; // Zmien na nazwę swojej bazy danych

// Utworzenie połączenia
$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdzenie połączenia
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Pobranie danych z formularza
$email = $_POST['email'];
$password = $_POST['password'];

// Przygotowanie zapytania SQL
$sql = "SELECT password FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Sprawdzenie hasła
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        echo "Zalogowano pomyślnie";
    } else {
        echo "Niepoprawne hasło";
    }
} else {
    echo "Nie znaleziono użytkownika";
}

$conn->close();
?>
