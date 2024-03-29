<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" href="<?php echo base_url() ?>assets/img/logo.png">
    <title>V&V SECURITY</title>

     <!-- Bootstrap -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.0/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/compiled-4.9.0.min.css">
       <!--Estilos propios -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/simple-sidebar.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>


<body style="background-color: #2f3542">



    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-VV border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">
                <p class="white-text h2">Servicios</p>
            </div>
            <div class="list-group list-group-flush">
                <a id="SB1" class="list-group-item list-group-item-action list-group-item-dark bg-VV white-text">Servicios
                    de seguridad</a>
                <a id="SB2" class="list-group-item list-group-item-action list-group-item-dark bg-VV white-text">Drones</a>
                <a id="SB3" class="list-group-item list-group-item-action list-group-item-dark bg-VV white-text">Aseo
                    Industrial</a>
                <a id="SB4" class="list-group-item list-group-item-action list-group-item-dark bg-VV white-text">Arriendo
                    de casetas de vigilancia</a>
                <a id="SB5" class="list-group-item list-group-item-action list-group-item-dark bg-VV white-text">Arriendo
                    de Radios</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-expand-lg navbar-dark  scrolling-navbar bg-VV">
                <button type="button" id="menu-toggle" class="btn border" style="background-color: transparent"><i class="fa fa-angle-left white-text" id="B" style="font-size: 20px"></i></button>

                <div class="container">
                    <a class="navbar-brand" href="<?php echo site_url() ?>"><img src="<?php echo base_url() ?>assets/img/Logo.png" width="150px" class="mx-auto d-block img-fluid"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url() ?>">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nosotros
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo site_url() ?>/Nosotros">Misión y
                                        visión</a>
                                    <a class="dropdown-item" href="<?php echo site_url() ?>/Nosotros#Organigrama">Organigrama</a>
                                    <a class="dropdown-item" href="<?php echo site_url() ?>/Nosotros#Responsabilidad">Responsabilidad Corporativa</a>
                                    <a class="dropdown-item" href="<?php echo site_url() ?>/Sucursales">Sucursales</a>
                            </li>


                            <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url() ?>/Noticias">Noticias
                        </a>
                    </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="<?php echo site_url() ?>/Servicios" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Servicios
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a onclick="Seguridad()" class="dropdown-item" href="<?php echo site_url() ?>/Servicios#Seguridad">Seguridad</a>
                                    <a onclick="Drones()" class="dropdown-item" href="<?php echo site_url() ?>/Servicios#Drones">Drones</a>
                                    <a onclick="AseoIndustrial()" class="dropdown-item" href="<?php echo site_url() ?>/Servicios#AseoIndustrial">Aseo
                                        Industrial</a>
                                    <a onclick="CasetaVigilancia()" class="dropdown-item" href="<?php echo site_url() ?>/Servicios#CasetaVigilancia">Caseta
                                        Vigilancia</a>
                                    <a onclick="Radios()" class="dropdown-item" href="<?php echo site_url() ?>/Servicios#Radios">Arriendo
                                        de
                                        Radios</a>
                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tecnología
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo site_url() ?>/SmartPanic">Smartpanics</a>
                                    <a class="dropdown-item" href="<?php echo site_url() ?>/Monitoreo">Monitoreo</a>
                                    <a class="dropdown-item" href="<?php echo site_url() ?>/TrackGuard">TrackGuard</a>
                                    <a class="dropdown-item" href="<?php echo site_url() ?>/VideoVigilancia">Video
                                        Vigilancia</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Reclutamiento
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo site_url() ?>/ggss">Guardias de
                                        seguridad</a>
                                    <a class="dropdown-item" href="<?php echo site_url() ?>/ssppz">Supervisor de
                                        zona</a>
                                 <!--   <a class="dropdown-item" href="<?php echo site_url() ?>/Capacitaciones">Capacitaciones</a> -->
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Contacto
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo site_url() ?>/Requerimientos">requerimientos</a>
                                    <a class="dropdown-item" href="<?php echo site_url() ?>/Contactar">Contactar</a>
                            </li>

                        </ul>

                    </div>
                </div>
            </nav>