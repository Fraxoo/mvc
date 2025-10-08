<main>
    <div class="width home">
        <h1>Film et diffusion</h1>
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
    const movies = <?= json_encode($movies) ?>
</script>
<script src="../public/js/home.js"></script>
