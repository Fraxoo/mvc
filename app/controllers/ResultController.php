<?php

require_once(__DIR__ . "/../models/MovieModel.php");


class ResultController
{
    public function view(string $method, array $params = [])
    {
        try {
            call_user_func([$this, $method], $params);
        } catch (Error $e) {
            // If URL looks like /result/<term>, treat <term> as the first param for search
            $merged = $method ? array_merge([$method], $params) : $params;
            call_user_func([$this, "search"], $merged);
        }
    }

    public function search($params = [])
    {
        $term = '';
        if (isset($params[0])) {
            $term = $params[0];
        } elseif (isset($_GET['search'])) {
            $term = $_GET['search'];
        } elseif (isset($_GET['q'])) {
            $term = $_GET['q'];
        }

        // Ensure proper decoding from path segment
        $term = $term !== '' ? urldecode($term) : $term;

        $movieModel = new MovieModel();
        $movies = $term !== '' ? $movieModel->search($term) : [];

        require_once(__DIR__ . "/../views/layout.php");
        require_once(__DIR__ . "/../views/result.php");
        require_once(__DIR__ . "/../views/footer.php");
    }
}
