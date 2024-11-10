<?php

// config.php

// Define la ruta pública
define('PUBLIC_PATH', '/public'); 

// Define el directorio de los documentos
define('DOC_PATH', PUBLIC_PATH . '/DOC/Transparencia y acceso a la información pública/Datos Abiertos');

// Define el directorio de los archivos PDF
return [
    'pdf_directory' => $_SERVER['DOCUMENT_ROOT'] . DOC_PATH,
];