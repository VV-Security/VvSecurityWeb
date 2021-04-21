<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.min.css"
        media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>


<!--######### NavBar Structure ##########--->
<nav class="deep-purple darken-4 ">
    <div class="nav-wrapper">

        <a href="<?php echo base_url() ?>" class="brand-logo hide-on-med-and-down">
            <img class="responsive-img" src="<?php echo base_url() ?>assets/img/vvLogo.png"
                alt="Volver Home V & V Security" width="200px">
        </a>
        <ul class="right hide-on-med-and-down ">
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
            <li><a href="#">TECNOLOGÍA</a></li>
            <li><a href="#">CONTACTO</a></li>
        </ul>
        <a href="<?php echo base_url() ?>" class="brand-logo hide-on-large-only">
            <img class="responsive-img" src="<?php echo base_url() ?>assets/img/vvLogo.png"
                alt="Volver Home V & V Security" width="150px">
        </a>

        <!--######### NOSOTROS Dropdown #############-->
        <ul id="dropdown1" class="dropdown-content">
            <li><a class="purple-text darken-text" href="#!"><strong>V & V Security</strong></a></li>
            <li><a class="purple-text darken-text" href="#!"><strong>Organigrama</strong></a></li>
            <!--<li class="divider"></li>-->
            <li><a class="purple-text darken-text" href="#!"><strong>Responsabilidad</strong></a></li>
            <li><a class="purple-text darken-text" href="#!"><strong>Sucursales</strong></a></li>

        </ul>
        <!--######### NOTICIAS Dropdown #############-->
        <ul id="dropdown2" class="dropdown-content">
            <li><a class="purple-text darken-text" href="#!"><strong>Recientes</strong></a></li>
            <li><a class="purple-text darken-text" href="#!"><strong>Trabaja Con Nosotros</strong></a></li>
        </ul>
        <!--######### SERVICIOS Dropdown #############-->
        <ul id="dropdown3" class="dropdown-content">
            <li><a class="purple-text darken-text" href="#!"><strong>Capacitación</strong></a></li>
            <li><a class="purple-text darken-text" href="#!"><strong>Drone</strong></a></li>
            <li><a class="purple-text darken-text" href="#!"><strong>Seguridad</strong></a></li>
        </ul>



        <!-- Side Nav -->
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
        </ul>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
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


<main>