<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Página no encontrada</title>
    <style>
    /* Estilos generales */
    body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #f0f0f5;
        color: #333;
    }

    /* Contenedor central */
    .container {
        text-align: center;
        max-width: 600px;
        padding: 20px;
        border-radius: 8px;
        background-color: white;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        animation: fadeIn 1s ease;
    }

    /* Título grande 404 */
    h1 {
        font-size: 96px;
        margin: 0;
        color: #ff6b6b;
    }

    /* Mensaje de error */
    p {
        font-size: 20px;
        color: #555;
    }

    /* Enlace estilizado */
    a {
        display: inline-block;
        margin-top: 20px;
        padding: 12px 24px;
        background-color: #ff6b6b;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s ease;
        font-weight: bold;
    }

    a:hover {
        background-color: #ff4b4b;
    }

    /* Animación */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>404</h1>
        <p>Lo sentimos, la página que estás buscando no existe.</p>
        <a href="/">Volver al inicio</a>
    </div>
</body>

</html>