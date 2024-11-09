<?php
// app/controllers/HomeController.php

require_once __DIR__ . '/../models/DataModel.php';

class HomeController {
    private $model;

    public function __construct() {
        $this->model = new DataModel();
    }

    public function index() {
        // Carga la vista principal
        require_once __DIR__ . '/../views/home.php';
    }

    public function processData() {
        // Procesa los datos enviados por POST
        $data = $_POST['data'] ?? '';
        $processedData = $this->model->processData($data);
        echo $processedData;
        exit;
    }
}
?>