<script>
  document.getElementById('articleForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Pobranie danych z formularza
    const title = document.getElementById('title').value;
    const content = document.getElementById('content').value;
    const author = document.getElementById('author').value;
    const date = document.getElementById('date').value;

    // Sprawdzenie, czy wszystkie pola są wypełnione
    if (title && content && author && date) {
      const newArticle = {
        title: title,
        content: content,
        author: author,
        date: date
      };

      // Wczytanie i aktualizacja pliku JSON
      fetch('articles.json')
        .then(response => response.json())
        .then(articles => {
          articles.push(newArticle);

          // Zapisanie zmienionego JSON (w prawdziwej implementacji zapis odbywa się po stronie serwera)
          // Dla przykładu zapis na klienta
          console.log(articles);

          document.getElementById('message').textContent = 'Artykuł został dodany!';
        });
    } else {
      document.getElementById('message').textContent = 'Wypełnij wszystkie pola!';
    }
  });
</script>
