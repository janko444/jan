<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Odbieranie danych z formularza
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_POST['image'];

    // Odczyt istniejących artykułów z pliku JSON
    $articlesFile = 'articles.json';
    $articles = file_exists($articlesFile) ? json_decode(file_get_contents($articlesFile), true) : [];

    // Dodanie nowego artykułu do tablicy
    $newArticle = [
        'title' => $title,
        'content' => $content,
        'image' => $image,
        'date' => date('Y-m-d H:i:s')
    ];
    $articles[] = $newArticle;

    // Zapis zaktualizowanej tablicy artykułów do pliku JSON
    file_put_contents($articlesFile, json_encode($articles));

    // Przekierowanie z komunikatem o sukcesie
    header('Location: panel_admin.html?status=success');
    exit();
} else {
    header('Location: panel_admin.html?status=error');
    exit();
}
?>
