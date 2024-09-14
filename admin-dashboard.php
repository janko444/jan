<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: admin-login.html');
    exit();
}

// Liczenie odwiedzin
$file = 'visit_count.txt';
if (file_exists($file)) {
    $visits = (int)file_get_contents($file);
} else {
    $visits = 0;
}

echo "<h2>Panel Admina</h2>";
echo "<p>Liczba odwiedzin strony: $visits</p>";
?>
