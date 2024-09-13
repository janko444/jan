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
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Haszowanie hasła

// Przygotowanie i wykonanie zapytania SQL
$sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Nowy rekord został pomyślnie dodany";
} else {
    echo "Błąd: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
