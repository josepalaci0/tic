<?php
// core/Router.php

class Router {
    public static function route() {
        $controller = new HomeController();

        // Ruta para la página principal
        if ($_SERVER['REQUEST_URI'] === '/' && $_SERVER['REQUEST_METHOD'] === 'GET') {
            $controller->index();
        }
        // Ruta para procesar los datos mediante POST
        elseif ($_SERVER['REQUEST_URI'] === '/process' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->processData();
        }
        else {
            http_response_code(404);
            echo "Página no encontrada";
        }
    }
}
?>