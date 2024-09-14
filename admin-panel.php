<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prosta weryfikacja użytkownika i hasła
    if ($username === 'janko444' && $password === 'Macieksuper89!') {
        $_SESSION['admin'] = true;
        header('Location: admin-dashboard.php');
        exit();
    } else {
        echo "<p style='color:red;'>Błędna nazwa użytkownika lub hasło!</p>";
    }
}
?>
