<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admina</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Dodaj nowy artykuł</h2>
        <form id="addArticleForm" method="POST" action="save-article.php">
            <div class="form-group">
                <label for="title">Tytuł artykułu:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="content">Treść artykułu:</label>
                <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Dodaj artykuł</button>
        </form>
    </div>
</body>
</html>
