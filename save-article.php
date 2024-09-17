<?php
// Sprawdź, czy dane zostały wysłane metodą POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Pobierz tytuł i treść artykułu
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Stwórz tablicę artykułu
    $article = [
        'title' => $title,
        'content' => $content,
        'date' => date('Y-m-d H:i:s')
    ];

    // Wczytaj istniejące artykuły z pliku JSON
    $filePath = 'articles.json';
    if (file_exists($filePath)) {
        $articles = json_decode(file_get_contents($filePath), true);
    } else {
        $articles = [];
    }

    // Dodaj nowy artykuł na początek tablicy
    array_unshift($articles, $article);

    // Zapisz zaktualizowaną listę artykułów do pliku JSON
    file_put_contents($filePath, json_encode($articles, JSON_PRETTY_PRINT));

    // Przekierowanie po dodaniu artykułu
    header("Location: admin-dashboard.php");
    exit();
}
?>
