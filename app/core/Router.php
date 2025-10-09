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
                return new LayoutController();
                break;

            case 'add' :
                return new AddController();
                return new LayoutController();
                break;

            case 'home' :
                return new HomeController();
                return new LayoutController();
                break;

            case 'result' :
                return new ResultController();
                return new LayoutController();
                break;

            case '':
                return new HomeController();
                return new LayoutController();
                break;
            default:
                // Si aucune route de match
                return new NotFoundController();
                break;
        }
    }
}