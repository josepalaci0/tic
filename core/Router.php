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
        // Ruta para /public, debería cargar el controlador 404
        elseif ($_SERVER['REQUEST_URI'] === '/public' && $_SERVER['REQUEST_METHOD'] === 'GET') {
            
            $controller404 = new NotFoundController();
            $controller404->index();
        }
        // Cualquier otra ruta muestra el error 404
        else {
            http_response_code(404);
            $controller404 = new NotFoundController();
            $controller404->index();
        }
    }
}

?>