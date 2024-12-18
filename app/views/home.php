<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tic.ibague.gov.co</title>
    <meta name="description" content="Pagina web oficial Secretaria TIC Ibague ,Secretario Tic Ibague, Tic ibague">
    <base href=".">
    <link rel="icon" type="image/x-icon" href="<?php echo PUBLIC_PATH; ?>/favicon.ico">
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH; ?>/Bootstrap v4.6.2.css" media="all">
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH; ?>/css/root.css" media="all">
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH; ?>/css/nav.css" media="all">
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH; ?>/css/inputbox.css" media="all">
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH; ?>/css/conten.css" media="all">
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH; ?>/css/scroll.css" media="all">
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH; ?>/css/info.css" media="all">



</head>

<body>
    <span class="top" id="top"></span>


    <header class="navbar navbar-govco ">

        <div class="container">
            <div class="navbar-logo float-left">
                <a target="_blank" title="Ir a página de gov.co" aria-label="Ir a página de gov.co" href="#">
                    <img alt="Logo Gov.co" src="public/img/gov.svg"></a>
                <button class="hide cursor-pointer text-white">Secretaria TIC</button>
            </div>
            <nav class="nav-vertical">
                <ul>
                    <li>
                        <a href="#">Trámites</a>
                        <ul class="submenu">
                            <li><a href="#">Trámites y servicios</a></li>

                            <li><a href="#">Entidades</a></li>
                            <li><a href="#">Noticias</a></li>
                            <li><a href="#">Ejercicios de participación</a></li>
                            <li><a href="#">Ventanillas únicas</a></li>
                            <li><a href="#">Portales transversales</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <form id=" dataForm">
                <label for="dataInput"></label>
                <div class="input__container">
                    <div class="shadow__input" onclick="sendData()" style="cursor: pointer;"></div>
                    <button class="input__button__shadow" type="button">
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" height="20px"
                            width="20px">
                            <path
                                d="M4 9a5 5 0 1110 0A5 5 0 014 9zm5-7a7 7 0 104.2 12.6.999.999 0 00.093.107l3 3a1 1 0 001.414-1.414l-3-3a.999.999 0 00-.107-.093A7 7 0 009 2z"
                                fill-rule="evenodd" fill="#17202A"></path>
                        </svg>
                    </button>
                    <input type="text" id="dataInput" name="data" class="input__search" placeholder="Buscar ...">



                </div>


            </form>



            <script>
            function toggleTooltip() {
                const tooltip = document.getElementById("ngb-popover-0");
                if (tooltip) {
                    // Cambia entre visible e invisible el tooltip
                    tooltip.style.display = tooltip.style.display === "none" ? "block" : "none";
                }
            }
            </script>

            <div class="login-nav">

                <button tooltipclass="my-custom-class" placement="bottom-left"
                    ngbtooltip="Accede a Carpeta Ciudadana Digital y demás servicios relacionados al Portal único del estado Colombiano"
                    aria-label="Accede a aplicaciones y servicios GOV.CO"
                    class="material-icons-round btn-apps d-none d-sm-block" aria-describedby="ngb-popover-0"
                    onclick="toggleTooltip()">apps</button>

                <div role="tooltip" id="ngb-popover-0"
                    class="popover fade show bs-popover-bottom bs-popover-bottom-start"
                    style="display: none; position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(920px, 59px);"
                    data-popper-placement="bottom-start">

                    <div data-popper-arrow="" class="popover-arrow"
                        style="position: absolute; left: 0px; transform: translate(12px, 0px);"></div>

                    <h3 class="popover-header">
                        <h2 class="title-box">Aplicaciones y servicios GOV.CO</h2>
                    </h3>

                    <div class="popover-body">
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item text-grey"><button class="text-grey"><img alt="Logo Gov.co"
                                        src="<?php echo PUBLIC_PATH; ?>/img/iconos-rounded.svg"> Portal
                                    Aprende TIC
                                </button></li>
                            <li class="list-group-item text-grey"><button class="text-grey activo"><img
                                        alt="Logo Gov.co" src="<?php echo PUBLIC_PATH; ?>/img/iconos-rounded3.svg">
                                    Documentos
                                    Publicos</button></li>
                            <li class="list-group-item text-grey"><button class="text-grey"><img alt="Logo Gov.co"
                                        src="<?php echo PUBLIC_PATH; ?>/img/iconos-rounded2.svg">
                                    Servicios en Linea
                                </button></li>
                        </ul>
                    </div>
                </div>
                <button class="btn--ccd-white ml-2 d-none d-sm-block">Iniciar sesión</button>
                <button class="btn--registro ml-2 d-none d-sm-block">Regístrate</button>
            </div>

        </div>
    </header>


    <div class="float-alert" style="display: none;">
        <div class="nav-secondary-ccd hide">
            <div class="container p-0 px-lg-3">
                <ul class="navbar-nav w-100 d-flex nav-items nav-items-desktop">
                    <li class="nav-item nav-item--beta">

                        <div><span aria-hidden="true" class="material-icons-round">info

                            </span>Explora la
                            Carpeta Ciudadana
                            Digital y encuentra los
                            resultados de tus interacciones con el Estado en un solo lugar. <a _ngcontent-fcb-c85=""
                                routerlink="/mas-informacion" href="#">Más
                                información</a></div>


                        <a href="javascript:void(0)" aria-hidden="true"
                            class="visibility_off cursor-pointer font-weight-bold"><span role="none" aria-hidden="true"
                                class="material-icons-round">visibility_off</span>Ocultar
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>



    <div class="content-page-barra-accesibilidad">
        <script>
        // Variable para controlar el estado de contraste
        let isContrastMode = false;

        // Almacena los colores originales para alternarlos manualmente
        const nav1Color = getComputedStyle(document.documentElement).getPropertyValue("--nav1-background-color")
            .trim();
        const nav2Color = getComputedStyle(document.documentElement).getPropertyValue("--nav2-background-color")
            .trim();

        // Variable para rastrear el estado de contraste
        let isContrasteEnabled = false;

        function toggleContraste() {
            // Alterna entre los colores almacenados
            const newColor = isContrasteEnabled ? nav1Color : nav2Color;

            // Aplica el nuevo color a --nav1-background-color
            document.documentElement.style.setProperty("--nav1-background-color", newColor);

            // Cambia el estado de contraste
            isContrasteEnabled = !isContrasteEnabled;
        }
        </script>
        <div class="block--gov-accessibility position-inherit">
            <div class="block-options">

                <script>
                // Obtener el valor actual de la variable CSS --font-size
                function getCurrentFontSize() {
                    return parseFloat(getComputedStyle(document.documentElement).getPropertyValue('--font-size'));
                }

                // Aumentar el tamaño de fuente
                function increaseFontSize() {
                    let currentSize = getCurrentFontSize();
                    document.documentElement.style.setProperty('--font-size', (currentSize + 2) + 'px');
                }

                // Disminuir el tamaño de fuente
                function decreaseFontSize() {
                    let currentSize = getCurrentFontSize();
                    if (currentSize > 10) { // Evitar que el tamaño sea muy pequeño
                        document.documentElement.style.setProperty('--font-size', (currentSize - 2) + 'px');
                    }
                }
                </script>

                <div class="ayuda-ref">
                    <a class="contraste" aria-label="Más información" onclick="toggleContraste()" href="#">
                        <span class="govco-icon govco-icon-contrast-n"></span>

                    </a>

                </div>
                <div class="ayuda-ref">
                    <a class="min-fontsize" rel="noopener" aria-label="Reducir letra" onclick="increaseFontSize()"
                        title="Reducir letra">

                        <span class="govco-icon govco-icon-less-size-n"></span></a>

                </div>
                <div class="ayuda-ref">
                    <a class="max-fontsize" rel="noopener" tabindex="0" aria-label="Aumentar letra"
                        onclick="decreaseFontSize()" title="Aumentar letra"><span
                            class="govco-icon govco-icon-more-size-n">

                        </span></a>

                </div>
            </div>
        </div>
    </div>

    <p id="response"></p>

    <?php require_once __DIR__ . '/../views/section.php'; ?>


</body>
<script src="<?php echo PUBLIC_PATH; ?>/script.js"></script>






</html>