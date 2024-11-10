<?php

// index.php

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/core/Router.php';
require_once __DIR__ . '/app/controllers/HomeController.php';
require_once __DIR__ . '/app/controllers/404Controller.php';


Router::route();
?>