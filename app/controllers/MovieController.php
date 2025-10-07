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
    public function show(array $params = [])
    {
        $id = $params[0];

        $moviemodel = new MovieModel();
        $movie = $moviemodel->get($id);

        if (isset($_POST["submit"])) {
            $moviemodel->del($id);
            header("Location: http://localhost:8080/");
            exit;
        }





        require_once(__DIR__ . "/../views/layout.php");

        require_once(__DIR__ . "/../views/single-movie.php");
    }
}
