<?php
require_once(__DIR__ . "/../models/MovieModel.php");

class MovieController
{

    public function view(string $method, array $params = [])
    {
        try {
            call_user_func([$this, $method], $params);
        } catch (Error $e) {
        }
    }

    public function json(array $params = [])
    {

        $moviemodel = new MovieModel();
        $movies = $moviemodel->getAll();

        header('Content-Type: application/json');
        echo json_encode($movies);
        exit;
    }

    public function search(array $params = [])
    {


        $moviemodel = new MovieModel();
        $movies = $moviemodel->search($_GET['query']);
        header('Content-Type: application/json');
        echo json_encode($movies);
        exit;
    }


    public function show(array $params = [])
    {
        $id = $params[0];

        $moviemodel = new MovieModel();
        $movie = $moviemodel->get($id);



        require_once(__DIR__ . "/../views/layout.php");
        require_once(__DIR__ . "/../views/single-movie.php");
        require_once(__DIR__ . "/../views/footer.php");
    }
}
