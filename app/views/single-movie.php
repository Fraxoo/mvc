<section class="movie">
    <div class="single_movie">
        <img src="https://picsum.photos/400/500" alt="Image aléatoire">
        <div class="info">
            <h2><?= $movie->getName(); ?></h2>
            <div>
                <h3>genre :</h3>
                <p><?= $movie->getGenre() ?></p>
            </div>
            <div>
                <h3>Autheur :</h3>
                <p><?= $movie->getAuthor() ?></p>
            </div>
            <div>
                <h3>Date de Sortie :</h3>
                <p><?= $movie->getReleaseDate()->format('d/m/Y') ?></p>
            </div>
        </div>
    </div>
</section>