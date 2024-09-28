<div class="container my-5">
    <h1>Ostatnie Artykuły</h1>
    <div class="row">
        <?php foreach ($articles as $article): ?>
        <div class="col-md-4">
            <div class="card mb-4">
                <?php if ($article['image']): ?>
                <img src="<?= htmlspecialchars($article['image']) ?>" class="card-img-top" alt="Obrazek">
                <?php endif; ?>
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($article['title']) ?></h5>
                    <p class="card-text"><?= substr(htmlspecialchars($article['content']), 0, 100) ?>...</p>
                    <a href="nowosci.html" class="btn btn-primary">Czytaj więcej</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
