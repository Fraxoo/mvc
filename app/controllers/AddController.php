<?php
require_once(__DIR__ . "/../models/MovieModel.php");

class AddController
{
    public function view(string $method, array $params = [])
    {
        try {
            call_user_func([$this, $method], $params);
        } catch (Error $e) {
            call_user_func([$this, "add"], $params);
        }
    }

    public function add($params = [])
    {

        if(isset($_POST["name"]) && isset($_POST["author"]) && isset($_POST["genre"]) && isset($_POST["release_date"]) ){
            $moviemodel = new MovieModel();
            $name = $_POST["name"];
            $genre = $_POST["genre"];
            $author = $_POST["author"];
            $release_date = date('Y-m-d', strtotime($_POST['release_date']));
            $moviemodel->add($name,$release_date,$genre,$author);
        }

        require_once(__DIR__ . "/../views/layout.php");
        require_once(__DIR__ . "/../views/add-movie.php");
    }
}
