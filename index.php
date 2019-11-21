<!DOCTYPE html>
</html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#3c3c3b" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800,800i&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/img/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/img/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/img/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/img/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/img/favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/img/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/img/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/img/favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="/img/favicon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="/img/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="/img/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/img/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="/img/favicon/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="/img/favicon/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="/img/favicon/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="/img/favicon/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="/img/favicon/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="/img/favicon/mstile-310x310.png" />
    <style>
    </style> 
</head>
<?php
    get_template_part('includes/header'); 
    b4st_main_before();
?>
<div id="formulario" class="d-flex flex-wrap justify-content-end p-0">
    <div id="inputsFormulario" class="col bg-white p-3 d-flex align-content-around flex-wrap esconde-formulario shadow">
        <input type="text" class="w-100 mx-auto" placeholder="Nombre">
        <input type="text" class="w-100 mx-auto" placeholder="Apellido">
        <input type="text" class="w-100 mx-auto" placeholder="Teléfono">
        <input type="email" class="w-100 mx-auto" placeholder="Email">
        <label for="mensajeContacto">Mensaje</label>
        <textarea name="mensajeContacto" id="mensajeContacto" cols="30" rows="1"></textarea>
        <button class="btn text-white bg-dark rounded mx-auto mt-1">Enviar</button>
        <?php echo do_shortcode('[contact-form-7 id="55" title="Formulario de contacto"]'); ?>
    </div>
    <div class="d-flex flex-column align-items-start text-center p-0 col-2 bg-white shadow">
        <p style="transform: rotate(90deg);margin-left: -10px;" class="tituloContacto light upper py-5 text-center"><span class="">Contacto</span></p>
        <a href="https://wa.me/56940020856" class="text-white my-1 p-3 w-100 bg-verde" target="_blank"><i class="fab fa-whatsapp"></i></a>
        <a href="mailto:parquelahuasa@ileben.cl" class="text-white my-1 w-100 bg-verde" target="_blank"><i class="p-3 far fa-envelope"></i></a>
    </div>
</div>
<body>
    <section class="container-fluid fixed-top bg-alpha d-none d-md-block">
        <nav id="menu" class="menu container d-flex flex-wrap justify-content-between align-items-end px-0">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-ileben-grupo-inmobiliario.svg" alt=""></a>
            <ul class="nav justify-content-end align-items-center">
                <li class="upper mx-2">
                    <a class="bolder smoothScroll" href="#proyecto">Proyecto</a>
                </li>
                <li class="upper mx-2">
                    <a class="bolder smoothScroll" href="#plantas">Plantas</a>
                </li>
                <li class="upper mx-2">
                    <a class="bolder smoothScroll" href="#lugaresParaDescubrir">Ubicación</a>
                </li>
                <li class="upper mx-2">
                    <a class="bolder smoothScroll" href="#contacto">Contacto</a>
                </li>
                <li class="upper mx-2">
                    <a class="text-verde bolder smoothScroll" href="#plantas">Cotizar</a>
                </li>
            </ul>
        </nav>
    </section>
    <nav class="d-md-none bg-alpha fixed-top p-4 d-flex justify-content-around align-items-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo_La_Huasa-03.svg" alt="">
        <a href="#plantas" class="btn-verde rounded upper px-3 py-1">Cotizar</a>
    </nav>
    <section id="cabeceraProyecto" class="pt-5 filtro-imagen container-fluid d-flex justify-content-center align-items-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo_La_Huasa-03.svg" alt="La Huasa" class="logo-la-huasa mt-5 shadow">
        <p class="flecha-abajo text-white m-0"><a href="#proyecto">></a></p>
    </section>
    <section id="proyecto" class="py-4 p-md-5 d-flex align-items-center justify-content-center">
        <div class="container d-flex flex-column">
            <h2 class="upper text-white light text-center">Donde quieres estar</h2>
            <div class="p-2 d-md-none"></div>
            <div id="cuadroItems" class="border d-flex justify-content-center align-items-center flex-wrap mt-md-5 p-2 text-center">
                <div class="col-6 col-md d-flex flex-column m-md-1 text-center borde-proyecto">
                    <p class="text-item-proyecto upper text-white m-0">2 <span class="punto">•</span> 3</p>
                    <p class="text-item-proyecto m-0 upper light text-verde">Dorms.<span class="astericos">*</span></p>
                </div>
                <div class="col-6 col-md d-flex flex-column m-md-1 text-center borde-proyecto">
                    <p class="text-item-proyecto upper text-white m-0">Desde</p>
                    <p class="text-item-proyecto m-0 upper light text-verde">uf 13.690<span class="astericos">*</span></p>
                </div>
                <div class="col-6 col-md d-flex flex-column m-md-1 text-center borde-proyecto">
                    <p class="text-item-proyecto upper text-white m-0">Hasta</p>
                    <p class="text-item-proyecto m-0 upper light text-verde">254 m<sup>2</sup><span class="astericos">**</span></p>
                </div>
                <div class="col-6 col-md d-flex flex-column m-md-1 text-center borde-proyecto">
                    <p class="text-item-proyecto upper text-white m-0">Entrega</p>
                    <p class="text-item-proyecto m-0 upper light text-verde">Inmediata</p>
                </div>
                <div class="col-6 col-md d-flex flex-column m-md-1 text-center">
                    <p class="text-item-proyecto upper text-white m-0">Visita</p>
                    <p class="text-item-proyecto m-0 upper light text-verde">Pilotos</p>
                </div>
            </div>
            <p id="texto-proyecto" class="light text-white text-center my-md-5 d-none d-md-block">
                Parque la Huasa es un exclusivo edificio diseñado por los arquitectos Fuenzalida, Swinburn & Asociados, para entregarte lo que buscas en un solo lugar. Disfruta sus amplios espacios, equipamiento y la posibilidad de elegir un jardín privado o una azotea panorámica para que vivas hoy en el lugar que siempre quisiste estar.
            </p>
            <div class="d-none d-md-block">
                <div class="d-flex flex-wrap align-items-start justify-content-center mt-5 text-center">
                    <div class="flex-column col-6 col-md-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/iconos-04.svg" class="icono-proyecto mb-3" alt="">
                        <p class="text-light-gray">Piscina</p>
                    </div>
                    <div class="flex-column col-6 col-md-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/iconos-05.svg" class="icono-proyecto mb-3" alt="">
                        <p class="text-light-gray">Quincho</p>
                    </div>
                    <div class="flex-column col-6 col-md-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/iconos-06.svg" class="icono-proyecto mb-3" alt="">
                        <p class="text-light-gray">Hobby Room<br>(opcional)</p>
                    </div>
                    <div class="flex-column col-6 col-md-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/iconos-07.svg" class="icono-proyecto mb-3" alt="">
                        <p class="text-light-gray">Ascensor de Acceso</p>
                    </div>
                </div>
                <p class="text-center light text-light-gray legal">
                    (*) Precio desde corresponde a depto. 402, no incluye estacionamiento ni bodega. (**) Superficie total corresponde a departamento 203 incluido jardín privado.
                </p>
            </div>
            <div class="d-md-none">
                <div class="owl-carousel owl-theme owl-mobile d-flex flex-wrap align-items-start justify-content-center mt-5 text-center">
                    <div class="flex-column mx-auto col-6 col-md-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/iconos-04.svg" class="icono-proyecto mb-3" alt="">
                        <p class="text-light-gray">Piscina</p>
                    </div>
                    <div class="flex-column mx-auto col-6 col-md-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/iconos-05.svg" class="icono-proyecto mb-3" alt="">
                        <p class="text-light-gray">Quincho</p>
                    </div>
                    <div class="flex-column mx-auto col-6 col-md-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/iconos-06.svg" class="icono-proyecto mb-3" alt="">
                        <p class="text-light-gray">Hobby Room<br>(opcional)</p>
                    </div>
                    <div class="flex-column mx-auto col-6 col-md-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/iconos-07.svg" class="icono-proyecto mb-3" alt="">
                        <p class="text-light-gray">Ascensor de Acceso</p>
                    </div>
                </div>
                <p class="text-center light text-light-gray legal">
                    (*) Precio desde corresponde a depto. 402, no incluye estacionamiento ni bodega. (**) Superficie total corresponde a departamento 203 incluido jardín privado.
                </p>
            </div>
        </div>
    </section>
    <section id="plantas" class="p-5 d-flex flex-column align-items-center justify-content-center">
        <div class="container d-flex flex-column my-5">
            <h2 class="upper light text-center w-100">Elije tu próximo departamento</h2>
            <p id="texto-proyecto" class="light text-center w-100">
                Últimos departamentos disponibles
            </p>
        </div>
        <div class="d-none d-md-block mt-5">
            <div class="container d-flex flex-wrap">
                <div class="col-12 col-md-4 p-1 d-flex flex-column align-items-center justify-content-center text-center mb-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plantas-la-huasa-08.png" alt="" width="70%" class="img-planta">
                    <div class="w-100 mb-0 que-planta d-flex flex-column align-self-end">
                        <p class="bolder m-0 upper">Departamento 101</p>
                        <p class="upper">3d / 2b / Jardín</p>
                        <a href="//http://www.comercialinmobiliarias.cl/cotizador_web_new/cotizador/index.php?id_subagrupaciones=4&key=ileben&open_dialog=true" class="btn bg-dark upper text-white col-4 mx-auto p-2">
                            <p class="m-0">Cotizar</p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 p-1 d-flex flex-column align-items-center justify-content-center text-center mb-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plantas-la-huasa-09.png" alt="" width="70%" class="img-planta">
                    <div class="w-100 mb-0 que-planta d-flex flex-column align-self-end">
                        <p class="bolder m-0 upper">Departamento 203</p>
                        <p class="upper">3d / 3b / Jardín</p>
                        <a href="//http://www.comercialinmobiliarias.cl/cotizador_web_new/cotizador/index.php?id_subagrupaciones=4&key=ileben&open_dialog=true" class="btn bg-dark upper text-white col-4 mx-auto p-2">
                            <p class="m-0">Cotizar</p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 p-1 d-flex flex-column align-items-center justify-content-center text-center mb-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plantas-la-huasa-10.png" alt="" width="70%" class="img-planta">
                    <div class="w-100 mb-0 que-planta d-flex flex-column align-self-end">
                        <p class="bolder m-0 upper">Departamento 303</p>
                        <p class="upper">3d / 3b</p>
                        <a href="//http://www.comercialinmobiliarias.cl/cotizador_web_new/cotizador/index.php?id_subagrupaciones=4&key=ileben&open_dialog=true" class="btn bg-dark upper text-white col-4 mx-auto p-2">
                            <p class="m-0">Cotizar</p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 p-1 d-flex flex-column align-items-center justify-content-center text-center mb-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plantas-la-huasa-11.png" alt="" width="70%" class="img-planta">
                    <div class="w-100 mb-0 que-planta d-flex flex-column align-self-end">
                        <p class="bolder m-0 upper">Departamento 401</p>
                        <p class="upper">3d / 3b / Mirador</p>
                        <a href="//http://www.comercialinmobiliarias.cl/cotizador_web_new/cotizador/index.php?id_subagrupaciones=4&key=ileben&open_dialog=true" class="btn bg-dark upper text-white col-4 mx-auto p-2">
                            <p class="m-0">Cotizar</p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 p-1 d-flex flex-column align-items-center justify-content-center text-center mb-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plantas-la-huasa-12.png" alt="" width="70%" class="img-planta">
                    <div class="w-100 mb-0 que-planta d-flex flex-column align-self-end">
                        <p class="bolder m-0 upper">Departamento 402</p>
                        <p class="upper">2d / 3b / Mirador</p>
                        <a href="//http://www.comercialinmobiliarias.cl/cotizador_web_new/cotizador/index.php?id_subagrupaciones=4&key=ileben&open_dialog=true" class="btn bg-dark upper text-white col-4 mx-auto p-2">
                            <p class="m-0">Cotizar</p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 p-1 d-flex flex-column align-items-center justify-content-center text-center mb-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plantas-la-huasa-13.png" alt="" width="70%" class="img-planta">
                    <div class="w-100 mb-0 que-planta d-flex flex-column align-self-end">
                        <p class="bolder m-0 upper">Departamento 404</p>
                        <p class="upper">3d / 3b / Mirador</p>
                        <a href="//http://www.comercialinmobiliarias.cl/cotizador_web_new/cotizador/index.php?id_subagrupaciones=4&key=ileben&open_dialog=true" class="btn bg-dark upper text-white col-4 mx-auto p-2">
                            <p class="m-0">Cotizar</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-md-none owl-carousel owl-theme owl-plantas">
            <div class="col-12 col-md-4 p-1 d-flex flex-column align-items-center justify-content-center text-center mb-5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plantas-la-huasa-08.png" alt="" width="70%" class="img-planta">
                <div class="w-100 mb-0 que-planta d-flex flex-column align-self-end">
                    <p class="bolder m-0 upper">Departamento 101</p>
                    <p class="upper">3d / 2b / Jardín</p>
                    <a href="//http://www.comercialinmobiliarias.cl/cotizador_web_new/cotizador/index.php?id_subagrupaciones=4&key=ileben&open_dialog=true" class="btn bg-dark upper text-white col-4 mx-auto p-2">
                        <p class="m-0">Cotizar</p>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-4 p-1 d-flex flex-column align-items-center justify-content-center text-center mb-5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plantas-la-huasa-09.png" alt="" width="70%" class="img-planta">
                <div class="w-100 mb-0 que-planta d-flex flex-column align-self-end">
                    <p class="bolder m-0 upper">Departamento 203</p>
                    <p class="upper">3d / 3b / Jardín</p>
                    <a href="//http://www.comercialinmobiliarias.cl/cotizador_web_new/cotizador/index.php?id_subagrupaciones=4&key=ileben&open_dialog=true" class="btn bg-dark upper text-white col-4 mx-auto p-2">
                        <p class="m-0">Cotizar</p>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-4 p-1 d-flex flex-column align-items-center justify-content-center text-center mb-5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plantas-la-huasa-10.png" alt="" width="70%" class="img-planta">
                <div class="w-100 mb-0 que-planta d-flex flex-column align-self-end">
                    <p class="bolder m-0 upper">Departamento 303</p>
                    <p class="upper">3d / 3b</p>
                    <a href="//http://www.comercialinmobiliarias.cl/cotizador_web_new/cotizador/index.php?id_subagrupaciones=4&key=ileben&open_dialog=true" class="btn bg-dark upper text-white col-4 mx-auto p-2">
                        <p class="m-0">Cotizar</p>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-4 p-1 d-flex flex-column align-items-center justify-content-center text-center mb-5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plantas-la-huasa-11.png" alt="" width="70%" class="img-planta">
                <div class="w-100 mb-0 que-planta d-flex flex-column align-self-end">
                    <p class="bolder m-0 upper">Departamento 401</p>
                    <p class="upper">3d / 3b / Mirador</p>
                    <a href="//http://www.comercialinmobiliarias.cl/cotizador_web_new/cotizador/index.php?id_subagrupaciones=4&key=ileben&open_dialog=true" class="btn bg-dark upper text-white col-4 mx-auto p-2">
                        <p class="m-0">Cotizar</p>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-4 p-1 d-flex flex-column align-items-center justify-content-center text-center mb-5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plantas-la-huasa-12.png" alt="" width="70%" class="img-planta">
                <div class="w-100 mb-0 que-planta d-flex flex-column align-self-end">
                    <p class="bolder m-0 upper">Departamento 402</p>
                    <p class="upper">2d / 3b / Mirador</p>
                    <a href="//http://www.comercialinmobiliarias.cl/cotizador_web_new/cotizador/index.php?id_subagrupaciones=4&key=ileben&open_dialog=true" class="btn bg-dark upper text-white col-4 mx-auto p-2">
                        <p class="m-0">Cotizar</p>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-4 p-1 d-flex flex-column align-items-center justify-content-center text-center mb-5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plantas-la-huasa-13.png" alt="" width="70%" class="img-planta">
                <div class="w-100 mb-0 que-planta d-flex flex-column align-self-end">
                    <p class="bolder m-0 upper">Departamento 404</p>
                    <p class="upper">3d / 3b / Mirador</p>
                    <a href="//http://www.comercialinmobiliarias.cl/cotizador_web_new/cotizador/index.php?id_subagrupaciones=4&key=ileben&open_dialog=true" class="btn bg-dark upper text-white col-4 mx-auto p-2">
                        <p class="m-0">Cotizar</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <div class="d-md-none">
        <section id="comodidadesMobile">
            <h2 class="upper light text-center w-100 mb-4 mt-5">Disfruta las comodidades de tu departamento</h2>
            <div class="owl-carousel owl-theme owl-mobile mb-5">
                <div class="d-flex flex-column col-12 col-md-3 p-2 text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Landing_La_Huasa-14.svg" alt="" height="76px" class="icono-disfruta">
                    <p class="m-0 light">Terraza Panorámica<br><span>(según tipología)</span></p>
                </div>
                <div class="d-flex flex-column col-12 col-md-3 p-2 text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Landing_La_Huasa-15.svg" alt="" height="76px" class="icono-disfruta">
                    <p class="m-0 light">Jardín<br><span>(según tipología)</span></p>
                </div>
                <div class="d-flex flex-column col-12 col-md-3 p-2 text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Landing_La_Huasa-16.svg" alt="" height="76px" class="icono-disfruta">
                    <p class="m-0 light">Sala de estar<br><span>(según tipología)</span></p>
                </div>
                <div class="d-flex flex-column col-12 col-md-3 p-2 text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Landing_La_Huasa-17.svg" alt="" height="76px" class="icono-disfruta">
                    <p class="m-0 light">Cocina integrable</p>
                </div>
                <div class="d-flex flex-column col-12 col-md-3 p-2 text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Landing_La_Huasa-18.svg" alt="" height="76px" class="icono-disfruta">
                    <p class="m-0 light">Baño en suite</p>
                </div>
                <div class="d-flex flex-column col-12 col-md-3 p-2 text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Landing_La_Huasa-19.svg" alt="" height="76px" class="icono-disfruta">
                    <p class="m-0 light">Loggia</p>
                </div>
                <div class="d-flex flex-column col-12 col-md-3 p-2 text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Landing_La_Huasa-20.svg" alt="" height="76px" class="icono-disfruta">
                    <p class="m-0 light">Walk-in closet</p>
                </div>
                <div class="d-flex flex-column col-12 col-md-3 p-2 text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Landing_La_Huasa-21.svg" alt="" height="76px" class="icono-disfruta">
                    <p class="m-0 light">Domótica</p>
                </div>
            </div>
        </section>
    </div>
    <div class="d-none d-md-block">
        <section id="comodidades" class="p-5 d-flex flex-column align-items-center justify-content-center">
            <div class="container d-flex flex-wrap">
                <h2 class="upper light text-center w-100 mb-5 mt-5">Disfruta las comodidades de tu departamento</h2>
                <div class="d-flex flex-column col-12 col-md-3 p-2 my-3 text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Landing_La_Huasa-14.svg" alt="" height="76px" class="icono-disfruta">
                    <p class="mt-3 light">Terraza Panorámica<br><span>(según tipología)</span></p>
                </div>
                <div class="d-flex flex-column col-12 col-md-3 p-2 my-3 text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Landing_La_Huasa-15.svg" alt="" height="76px" class="icono-disfruta">
                    <p class="mt-3 light">Jardín<br><span>(según tipología)</span></p>
                </div>
                <div class="d-flex flex-column col-12 col-md-3 p-2 my-3 text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Landing_La_Huasa-16.svg" alt="" height="76px" class="icono-disfruta">
                <p class="mt-3 light">Sala de estar<br><span>(según tipología)</span></p>
                </div>
                <div class="d-flex flex-column col-12 col-md-3 p-2 my-3 text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Landing_La_Huasa-17.svg" alt="" height="76px" class="icono-disfruta">
                    <p class="mt-3 light">Cocina integrable<br><span> </span></p>
                </div>
                
                <div class="w-100 d-flex flex-wrap">
                    <div class="d-none d-md-block col-2 p-0 mx-auto mt-1 border-bottom"></div>
                    <div class="d-none d-md-block col-2 p-0 mx-auto mt-1 border-bottom"></div>
                    <div class="d-none d-md-block col-2 p-0 mx-auto mt-1 border-bottom"></div>
                    <div class="d-none d-md-block col-2 p-0 mx-auto mt-1 border-bottom"></div>
                </div>

                <div class="d-flex flex-column col-12 col-md-3 p-2 mt-5 text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Landing_La_Huasa-18.svg" alt="" height="76px" class="icono-disfruta">
                    <p class="mt-3 light">Baño en suite</p>
                </div>
                <div class="d-flex flex-column col-12 col-md-3 p-2 mt-5 text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Landing_La_Huasa-19.svg" alt="" height="76px" class="icono-disfruta">
                    <p class="mt-3 light">Loggia</p>
                </div>
                <div class="d-flex flex-column col-12 col-md-3 p-2 mt-5 text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Landing_La_Huasa-20.svg" alt="" height="76px" class="icono-disfruta">
                    <p class="mt-3 light">Walk-in closet</p>
                </div>
                <div class="d-flex flex-column col-12 col-md-3 p-2 mt-5 text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Landing_La_Huasa-21.svg" alt="" height="76px" class="icono-disfruta">
                    <p class="mt-3 light">Domótica</p>
                </div>
            </div>
        </section>
    </div>
    <section id="galeria" class="">
        <div class="owl-carousel owl-theme owl-galeria">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Baño.jpg" alt="" class="img-galeria" height="670px">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Cocina.jpg" alt="" class="img-galeria" height="670px">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Dormitorio 1.jpg" alt="" class="img-galeria" height="670px">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Dormitorio 2.jpg" alt="" class="img-galeria" height="670px">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Dormitorio 3.jpg" alt="" class="img-galeria" height="670px">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Living comedor.jpg" alt="" class="img-galeria" height="670px">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/SLA_2211.jpg" alt="" class="img-galeria" height="670px">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/SLA_2255.jpg" alt="" class="img-galeria" height="670px">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/SLA_2292.jpg" alt="" class="img-galeria" height="670px">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/SLA_2400.jpg" alt="" class="img-galeria" height="670px">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/SLA_2530.jpg" alt="" class="img-galeria" height="670px">
        </div>
    </section>
    <section id="recorridosVirtuales" class="pt-4 p-md-5 d-flex flex-column justify-content-center align-items-center">
        <h2 class="upper light text-center w-100 mb-5">Recorridos Virtuales</h2>
        <iframe class="container" src="https://my.matterport.com/show/?m=LqE5HQZ6Nyp" allowfullscreen="" allow="vr" width="100%" height="480" frameborder="0"></iframe>
        <iframe class="container" src="https://my.matterport.com/show/?m=LV5biYPR3Z3" allowfullscreen="" allow="vr" width="100%" height="480" frameborder="0"></iframe>
    </section>
    <div class="d-none d-md-block">
        <section id="lugaresParaDescubrir" class="p-5 d-flex flex-column justify-content-center align-items-center">
            <h2 class="upper light text-center w-100 mb-5">Lugares para descubrir</h2>
            <div class="container d-flex flex-wrap p-0">
                <div class="col-12 col-md-6 p-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mapa-la-huasa-22.svg" alt="" width="100%">
                </div>
                <div class="col-12 col-md-6 pl-md-5 d-flex flex-wrap justify-content-center align-items-end">
                    <div class="ml-5 mr-auto light my-2 pl-md-2 col-2 col-md-12 bl-verde">Clínica Alemana</div>
                    <div class="ml-5 mr-auto light my-2 pl-md-2 col-2 col-md-12 bl-verde">Portal La Dehesa</div>
                    <div class="ml-5 mr-auto light my-2 pl-md-2 col-2 col-md-12 bl-verde">Espacio Urbano La Dehesa</div>
                    <div class="ml-5 mr-auto light my-2 pl-md-2 col-2 col-md-12 bl-verde">Supermercado Jumbo y Líder</div>
                    <div class="ml-5 mr-auto light my-2 pl-md-2 col-2 col-md-12 bl-verde">Instituto Culinary</div>
                    <div class="ml-5 mr-auto light my-2 pl-md-2 col-2 col-md-12 bl-verde">Club de Golf</div>
                    <div class="ml-5 mr-auto light my-2 pl-md-2 col-2 col-md-12 bl-verde">Parque Cerro del Medio</div>
                </div>
            </div>
            <a href="https://www.google.com/maps/place/La+Huasa+1945,+Lo+Barnechea,+Regi%C3%B3n+Metropolitana/@-33.35604,-70.5255167,17z/data=!3m1!4b1!4m5!3m4!1s0x9662cbded91d94b3:0x4f2d9672f924e848!8m2!3d-33.35604!4d-70.523328" target="_blank" class="bg-dark rounded upper text-white text-center mt-5 px-5 py-3">Ver en google maps</a>
        </section>
    </div>
    <div class="p-4 d-md-none bg-dark text-center text-wite upper bolder">
        <a href="https://www.waze.com/ul?ll=-33.35586607%2C-70.52334309&navigate=yes&zoom=17" class="text-white" target="_blank">Ver ubicación en Waze</a>
    </div>
    <section id="contacto" class="p-5 d-flex flex-column justify-content-center align-items-center">
        <h2 class="upper light text-center w-100 mb-5">Encontrémonos en</h2>
        <div class="container d-flex flex-wrap justify-content-between p-0">
            <div class="col-12 col-md d-flex flex-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icono-contacto-14.svg" width="20px" class="align-self-start">
                <div class="col d-flex flex-column px-3">
                    <p class="mt-n1 medium">Ventas</p>
                    <p class="light">
                        La Huasa 1945, La Dehesa
                        <br>
                        Cercano a Mall Portal La Dehesa
                    </p>
                </div>
            </div>
            <div class="col-12 col-md d-flex flex-wrap border-contacto-left pl-md-5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icono-contacto-15.svg" width="20px" class="align-self-start">
                <div class="col d-flex flex-column px-3">
                    <p class="mt-n1 medium">Horario de Atención</p>
                    <p class="light">
                    Lunes 15:00 a 19:00 hrs.
                    <br>
                    Martes a Domingo 10:30 a 19:00 hrs.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md d-flex flex-wrap border-contacto-left pl-md-5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icono-contacto-16.svg" width="20px" class="align-self-start">
                <div class="col d-flex flex-column px-3">
                    <p class="mt-n1 medium">Contacto</p>
                    <div class="d-flex flex-wrap m-0 p-0">
                        <p class="light col-12 col-md m-0 p-0">
                            (+56) 2 2948 7793
                        </p>
                        <p class="light col-12 col-md m-0 p-0">
                            (+56) 9 4002 0856
                        </p>
                    </div>
                    <a href="mailto:parquelahuasa@ileben.cl" class="light col-12 col-md m-0 p-0">
                        parquelahuasa@ileben.cl
                    </a>
                </div>
            </div>
            <p class="text-center text-md-left mt-5 light text-light-gray legal">
            Las imágenes, textos y contenidos en este impreso fueron elaborados con fines ilustrativos y no constituyen necesariamente una representación exacta de la realidad. Su objetivo es mostrar una
caracterización general del proyecto y no cada uno de sus detalles. Verifique las especificaciones de su departamento al momento de comprar. Esto se informa en virtud de lo señalado en la Ley N°19.496
y según la Ley N°21.014, y DDU 361 de fecha 16 de junio de 2017.
            </p>
        </div>
    </section>
    <footer class="bg-dark p-5 m-0">
        <div class="container d-flex flex-wrap justify-content-around">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-17.svg" width="230px" class="">
            <div class="col-12 col-md p-2 text-center text-md-right">
                <p class="light text-light m-0">Síguenos en <a href="https://www.facebook.com/lebengrupoinmobiliario/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-18.svg" alt=""></a><a href="https://www.instagram.com/lebengrupoinmobiliario/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-19.svg" alt=""></a></p>
                <p class="light text-light-gray m-0">Todos los derechos reservados © 2018 Leben Grupo Inmobiliario.</p>
            </div>
        </div>
    </footer>
</body>
</html>