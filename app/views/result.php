<main>
    <div class="width home">
        <h1>Résultats de recherche</h1>
        <div class="movie-list">
            <template id="movie-list">
                <a href="http://localhost:8080/movie/show/0">
                    <div class="single-movie">
                        <img src="">
                        <p id="name">name</p>
                        <p id="diffusion">diffusion</p>
                    </div>
                </a>
            </template>
        </div>
    </div>
</main>
<script>
  const searchTerm = <?= json_encode($term ?? '') ?>;
  const movies = <?= json_encode($movies ?? []) ?>;
  // Optionally update heading with term
  document.addEventListener('DOMContentLoaded', () => {
    const h1 = document.querySelector('h1');
    if (searchTerm) {
      h1.textContent = `Résultats pour "${searchTerm}"`;
    }
  });
 </script>
<script src="/public/js/result.js"></script>