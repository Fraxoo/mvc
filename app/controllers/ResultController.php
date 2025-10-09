<?php

require_once(__DIR__ . "/../models/MovieModel.php");


class ResultController
{
    public function view(string $method, array $params = [])
    {
        try {
            call_user_func([$this, $method], $params);
        } catch (Error $e) {
            call_user_func([$this, "search"], $params);
        }
    }

    public function search($params = [])
    {

        



        require_once(__DIR__ . "/../views/layout.php");
        require_once(__DIR__ . "/../views/result.php");
        require_once(__DIR__ . "/../views/footer.php");
    }
}
