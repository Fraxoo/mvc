<?php

require_once(__DIR__."/../models/MovieModel.php");
class HomeController{
    public function view(string $method,array $params = []){
        try{
            call_user_func([$this,$method],$params);
        }catch(Error $e){
            call_user_func([$this,"home"],$params);
        }
    }

    $movieModel = new MovieModel();

    

    public function home($params = []){
        require_once(__DIR__."/../views/home.php");
    }
}