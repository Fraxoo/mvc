<section>
    <div class="search_bar">
        <form method="post" id="search">
            <input type="search" name="search-bar" id="search-bar">
        </form>
    </div>
    <?php if (empty($search)) : ?>
        <div class="home_grid">
            <?php foreach ($movies as $movie) : ?>
                <a href="http://localhost:8080/movie/show/<?= $movie->getId() ?>">
                    <div class="home_movie">
                        <img src="https://picsum.photos/400/500" alt="Image aléatoire">
                        <p><?= $movie->getName(); ?></p>
                        <p><?= $movie->getAuthor() ?></p>
                        <p><?= $movie->getGenre() ?></p>
                        <p><?= $movie->getReleaseDate()->format('d/m/Y') ?></p>

                    </div>
                </a>
            <?php endforeach ?>
        </div>
    <?php else : ?>
        <div class="home_grid">
            <a href="http://localhost:8080/movie/show/<?= $result->getId() ?>">
                <div class="home_movie">
                    <img src="https://picsum.photos/400/500" alt="Image aléatoire">
                    <p><?= $result->getName(); ?></p>
                    <p><?= $result->getAuthor() ?></p>
                    <p><?= $result->getGenre() ?></p>
                    <p><?= $result->getReleaseDate()->format('d/m/Y') ?></p>
                </div>
            </a>
        </div>
    <?php endif ?>
</section>