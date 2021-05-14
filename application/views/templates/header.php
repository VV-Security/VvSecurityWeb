<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.min.css"
        media="screen,projection" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styleHover.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <!--######### NavBar Structure ##########--->
    <nav class="deep-purple darken-4">
        <div class="nav-wrapper">

            <a href="<?php echo base_url() ?>" class="brand-logo hide-on-med-and-down">
                <img class="responsive-img" src="<?php echo base_url() ?>assets/img/vvLogo.png"
                    alt="Volver Home V & V Security" width="200px">
            </a>
            <ul class="right hide-on-med-and-down  valign-wrapper">
                <li><a href="<?php echo base_url() ?>"><i class="material-icons right">home</i></a></li>
                <li><a class="dropdown-button" href="#" data-activates="dropdown1">NOSOTROS
                        <i class="material-icons right">arrow_drop_down</i></a>
                </li>
                <li><a class="dropdown-button" href="#" data-activates="dropdown2">NOTICIAS
                        <i class="material-icons right">arrow_drop_down</i></a></li>
                <!-- Dropdown Trigger -->
                <li><a class="dropdown-button" href="#!" data-activates="dropdown3">SERVICIOS
                        <i class="material-icons right">arrow_drop_down</i></a>
                </li>
                <li><a href="http://www.tecnology.vvsecurity.cl/">TECNOLOGÍA</a></li>
                <li><a href="#">CONTACTO</a></li>
                <li>
                    <!-- Modal Trigger -->
                    <a class="waves-effect waves-light modal-trigger" href="#modal1">
                        <i class="material-icons center">open_in_new</i></a>
                </li>
            </ul>
            <a href="<?php echo base_url() ?>" class="brand-logo hide-on-large-only">
                <img class="responsive-img" src="<?php echo base_url() ?>assets/img/vvLogo.png"
                    alt="Volver Home V & V Security" width="150px">
            </a>

            <!--######### Nav NOSOTROS Dropdown #############-->
            <ul id="dropdown1" class="dropdown-content ">
                <li><a class="purple-text darken-text" href="#!"><strong>V & V Security</strong></a></li>
                <li><a class="purple-text darken-text" href="#!"><strong>Organigrama</strong></a></li>
                <li><a class="purple-text darken-text" href="#!"><strong>Responsabilidad</strong></a></li>
                <li><a class="purple-text darken-text" href="#!"><strong>Sucursales</strong></a></li>

            </ul>
            <!--######### Nav NOTICIAS Dropdown #############-->
            <ul id="dropdown2" class="dropdown-content">
                <li><a class="purple-text darken-text" href="#!"><strong>Recientes</strong></a></li>
                <li><a class="purple-text darken-text" href="#!"><strong>Trabaja Con Nosotros</strong></a></li>
            </ul>
            <!--######### Nav SERVICIOS Dropdown #############-->
            <ul id="dropdown3" class="dropdown-content">
                <li><a class="purple-text darken-text" href="#!"><strong>Capacitación</strong></a></li>
                <li><a class="purple-text darken-text" href="#!"><strong>Drone</strong></a></li>
                <li><a class="purple-text darken-text" href="#!"><strong>Seguridad</strong></a></li>
            </ul>



            <!--######### NavBar Structure ##########--->
            <ul id="slide-out" class="side-nav">
                <li>
                    <a href="#!" class="center"><img class="responsive-img"
                            src="<?php echo base_url() ?>assets/img/logo_softguard_blanco 2.jpg"
                            alt="Volver Home V & V Security" width="150px">
                </li>
                <li>
                    <a class="dropdown-button" href="#" data-activates="dropdown4">Nosotros
                        <i class="material-icons right">arrow_drop_down</i></a>
                </li>
                <li>
                    <a class="dropdown-button" href="#" data-activates="dropdown5">Noticias
                        <i class="material-icons right">arrow_drop_down</i></a>
                </li>
                <li>
                    <a class="dropdown-button" href="#" data-activates="dropdown6">Servicios
                        <i class="material-icons right">arrow_drop_down</i></a>
                </li>
                <li><a href="#!">Tecnología</a></li>
                <li><a href="#!">Contacto</a></li>
                <li>
                    <a class="waves-effect waves-light modal-trigger center black-text" href="#modal1">
                        <i class="material-icons center black-text">open_in_new</i></a>
                </li>
                <li>
                    <a href="#" data-target="slide-out" class="sidenav-trigger"><i
                            class="material-icons black-text">menu</i></a>

                </li>
            </ul>
            <a href="#" data-activates="slide-out" class="button-collapse">
                <i class="material-icons">menu</i></a>

        </div>
    </nav>

    <!--  Side-Nav   ######### NOSOTROS Dropdown #############-->
    <ul id="dropdown4" class="dropdown-content deep-purple darken-4  ">
        <li><a class="purple-text white-text" href="#!"><strong>V & V Security</strong></a></li>
        <li><a class="purple-text white-text" href="#!"><strong>Organigrama</strong></a></li>
        <!--<li class="divider"></li>-->
        <li><a class="purple-text white-text" href="#!"><strong>Responsabilidad</strong></a></li>
        <li><a class="purple-text white-text" href="#!"><strong>Sucursales</strong></a></li>

    </ul>
    <!--  Side-Nav   ######### NOTICIAS Dropdown #############-->
    <ul id="dropdown5" class="dropdown-content deep-purple darken-4">
        <li><a class="purple-text white-text" href="#!"><strong>Recientes</strong></a></li>
        <li><a class="purple-text white-text" href="#!"><strong>Trabaja Con Nosotros</strong></a></li>
    </ul>
    <!--  Side-Nav   ######### SERVICIOS Dropdown #############-->
    <ul id="dropdown6" class="dropdown-content deep-purple darken-4">
        <li><a class="purple-text white-text" href="#!"><strong>Capacitación</strong></a></li>
        <li><a class="purple-text white-text" href="#!"><strong>Drone</strong></a></li>
        <li><a class="purple-text white-text" href="#!"><strong>Seguridad</strong></a></li>
    </ul>
    <!-- Modal Structure de ACCESOS DIRECTOS -->
    <div id="modal1" class="modal bottom-sheet">
        <br>
        <div class="modal-content ">
            <a class="modal-trigger modal-close right btn btn-floating">
                <i class="material-icons">close</i>
            </a>
            <h4 class="center-align">ACCESOS DIRECTOS</h4>
            <br>
            <div class="row ">
                <div class="col s8 l2 center-align hoverable ">
                    <div class="card center-align ">
                        <div class="card-image">
                            <a
                                href="https://www.vvsecurity.cl/wp-login.php?redirect_to=https%3A%2F%2Fwww.vvsecurity.cl%2Fwp-admin%2F&reauth=1">Web
                                Master
                                <img class="responsive-img" src="<?php echo base_url() ?>assets/img/WebMaster.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col s8 l2 hoverable">
                    <div class="card center-align ">
                        <div class="card-image">
                            <a href="https://www.controlroll.com/login.aspx">Control Roll
                                <img class="responsive-img" src="<?php echo base_url() ?>assets/img/ControlRoll.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col  s8 l2 hoverable">
                    <div class="card center-align ">
                        <div class="card-image">
                            <a href="https://www.vvsecurity.cl:2096/">Web Mail
                                <img class="responsive-img " src="<?php echo base_url() ?>assets/img/WebMail.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col  s8 l2 hoverable">
                    <div class="card center-align ">
                        <div class="card-image">
                            <a href="https://erp.laudus.cl/PortalEmpleados/">Laudus
                                <img class="responsive-img " src="<?php echo base_url() ?>assets/img/Laudus.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col  s8 l2 hoverable">
                    <div class="card center-align ">
                        <div class="card-image">
                            <a href="http://vvsecurity.duckdns.org/">Iniciar Sesión
                                <img class="responsive-img" src="<?php echo base_url() ?>assets/img/Tecnologia.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col  s8 l2 hoverable">
                    <div class="card center-align ">
                        <div class="card-image">
                            <a href="#">Certificado ISO
                                <img class="responsive-img" src="<?php echo base_url() ?>assets/img/CertificadoISO.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</head>

<body>