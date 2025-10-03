<?php
require_once(__DIR__."/../models/MovieModel.php");

class MovieController{

    public function view(string $method,array $params = []){
        try{
            call_user_func([$this,$method],$params);
        }catch(Error $e){

        }
    }
    public function show(array $params = []){
        $id = $params[0];

        $MovieModel = new MovieModel();
        $Movie = $MovieModel->get($id);

        require_once(__DIR__."/../views/single-movie.php");
    }


}