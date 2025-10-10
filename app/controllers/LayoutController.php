<?php

require_once(__DIR__ . "/../models/MovieModel.php");


class LayoutController
{
    public function view(string $method, array $params = [])
    {
        try {
            call_user_func([$this, $method], $params);
        } catch (Error $e) {
            call_user_func([$this, "home"], $params);
        }
    }

    public function layout($params = [])
    {
        if(isset($_GET["search"])){
            header("location: http://localhost:8080/result/".$_GET["search"]);
        }
        


        require_once(__DIR__ . "/../views/layout.php");
    }
}
