<?php

require_once(__DIR__."/../controllers/MovieController.php");
require_once(__DIR__."/../controllers/HomeController.php");
require_once(__DIR__."/../controllers/NotFoundController.php");
require_once(__DIR__."/../controllers/AddController.php");
require_once(__DIR__."/../controllers/LayoutController.php");
require_once(__DIR__."/../controllers/ResultController.php");



class Router{
    public static function getController(string $controllerName){
        switch ($controllerName) {
            case 'movie':
                return new MovieController();
                break;

            case 'add' :
                return new AddController();
                break;

            case 'home' :
                return new HomeController();
                break;

            case 'result' :
                return new ResultController();
                break;

            case '':
                return new HomeController();
                break;
            default:
                // Si aucune route de match
                return new NotFoundController();
                break;
        }
    }
}