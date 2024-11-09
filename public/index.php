<?php
// public/index.php

require_once __DIR__ . '/../core/Router.php';
require_once __DIR__ . '/../app/controllers/HomeController.php';

Router::route();
?>