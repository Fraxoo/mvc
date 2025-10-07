<?php

require_once(__DIR__ . "/../models/MovieModel.php");
class HomeController
{
    public function view(string $method, array $params = [])
    {
        try {
            call_user_func([$this, $method], $params);
        } catch (Error $e) {
            call_user_func([$this, "home"], $params);
        }
    }

    public function home($params = [])
    {
        
        $movieModel = new MovieModel();
        $movies = $movieModel->getAll();        

        require_once(__DIR__."/../views/layout.php");
        require_once(__DIR__ . "/../views/home.php");
    }
}
