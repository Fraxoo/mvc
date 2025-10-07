<?php
class MovieModel
{
    private PDO $bdd;


    function __construct()
    {
        $this->bdd = new PDO("mysql:host=bdd;dbname=app-database", "root", "root");
    }
    public function add($name, $release_date, $genre, $author): void
    {
        $addMovie = $this->bdd->prepare("INSERT INTO movie(name,release_date,genre,author) VALUES (:name,:release_date,:genre,:author)");
        $addMovie->execute([
            "name" => $name,
            "release_date" => $release_date,
            "genre" => $genre,
            "author" => $author

        ]);
    }
    public function del(int $id): void
    {
        $delMovie = $this->bdd->prepare("DELETE FROM movie WHERE id = :id");
        $delMovie->execute([
            "id" => $id
        ]);
    }
    public function get(int $id): MovieEntity | NULL
    {
        $getMovie = $this->bdd->prepare("SELECT * FROM movie WHERE id = :id");
        $getMovie->execute([
            "id" => $id
        ]);
        $movie = $getMovie->fetch();
        if (!$movie) {
            return NULL;
        } else {
            return new MovieEntity(
                $movie["name"],
                $movie["release_date"],
                $movie["genre"],
                $movie["author"],
                $movie["id"]
            );
        }
    }

    /**
     * @return MoveEntity[]
     */
    public function getAll(): array
    {
        $getAllMovie = $this->bdd->prepare("SELECT * FROM movie");
        $getAllMovie->execute();
        $movies = $getAllMovie->fetchAll();

        $MoviesEntity = [];
        foreach ($movies as $movie) {
            $MoviesEntity[] = new MovieEntity(  //test si on a besoin de mettre [] apres Moviesentitty
                $movie["name"],
                $movie["release_date"],
                $movie["genre"],
                $movie["author"],
                $movie["id"]
            );
        }
        return $MoviesEntity;
    }
}

class MovieEntity
{
    private int $id;
    private string $name;
    private DateTime $release_date;
    private string $genre;
    private string $author;

    function __construct($name, $release_date, $genre, $author, $id = null)
    {
        $this->setName($name);
        $this->setReleaseDate($release_date);
        $this->setGenre($genre);
        $this->setAuthor($author);
        $this->id = $id;
    }





    // Getters et Setters...

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }



    public function setReleaseDate($release_date)
    {
        $this->release_date = new DateTime($release_date);
    }
    public function getReleaseDate()
    {
        return $this->release_date;
    }



    public function setGenre($genre)
    {
        $this->genre = $genre;
    }
    public function getGenre()
    {
        return $this->genre;
    }



    public function setAuthor($author)
    {
        $this->author = $author;
    }
    public function getAuhtor()
    {
        return $this->author;
    }


    public function getId()
    {
        return $this->id;
    }
}


class DiffusionModel
{
    private PDO $bdd;

    function __construct()
    {
        $this->bdd = new PDO("mysql:host=bdd;dbname=app-database", "root", "root");
    }

    public function add($movie_id, $date_diffusion)
    {
        $addDiffusion = $this->bdd->prepare("INSERT INTO diffusion (movie_id,diffusion_date) VALUES (:movie_id,:diffusion_date)");
        $addDiffusion->execute([
            "movie_id" => $movie_id,
            "diffusion_date" => $date_diffusion
        ]);
    }

    public function del($movie_id){
        $delMovie = $this->bdd->prepare("DELETE * FROM diffusion WHERE movie_id = :movie_id");
        $delMovie->execute([
            "movie_id" => $movie_id
        ]);
    }
}


class DiffusionEntity
{
    private int $id;
    private int $movie_id;
    private DateTime $date_diffusion;
    // Getters et Setters...

    function __construct($movie_id,$date_diffusion)
    {
        $this->movie_id = $movie_id;
        $this->date_diffusion = $date_diffusion;
    }


    public function setDiffusionDate($movie_id, $date_diffusion)
    {
        $this->movie_id = $movie_id;
        $this->date_diffusion = $date_diffusion;
    }
    public function getDiffusionDate()
    {
        return $this->date_diffusion;
    }
}
