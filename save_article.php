<?php
// Sprawdź, czy dane zostały przesłane przez formularz
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Odczytaj istniejące artykuły
    $data = json_decode(file_get_contents('articles.json'), true);
    
    // Przygotuj nowy artykuł
    $newArticle = [
        'title' => $_POST['title'],
        'content' => $_POST['content'],
        'image' => $_POST['image'] ?: 'default-image.jpg' // Ustaw domyślny obrazek, jeśli nie podano
    ];
    
    // Dodaj nowy artykuł do tablicy
    $data[] = $newArticle;
    
    // Zapisz zaktualizowane artykuły z powrotem do pliku
    file_put_contents('articles.json', json_encode($data));
    
    echo "Artykuł dodany pomyślnie!";
}
?>
