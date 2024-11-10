<?php

// app/controllers/404Controller.php
require_once __DIR__ . '/../models/DataModel.php';

class NotFoundController {    

    public function index() {
    // Indica el estado 404 al navegador
    header("HTTP/1.0 404 Not Found");
    require_once __DIR__ . '/../views/404.php';
}

}