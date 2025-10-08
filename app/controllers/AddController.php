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

        

        require_once(__DIR__ . "/../views/layout.php");
        require_once(__DIR__ . "/../views/add-movie.php");
    }
}
