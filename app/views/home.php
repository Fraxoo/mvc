<header>
    <h1>Allociné</h1>
</header>

<section>
    <div>
        <?php foreach($movies as $movie) : ?>
        <div>
            <p><?= $movie->getName();?></p>
        </div>
        <?php endforeach ?>
    </div>
</section>