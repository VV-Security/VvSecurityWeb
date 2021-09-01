<style>
header {
    position: relative;
    background-color: black;
    height: 100vh;
    min-height: 25rem;
    width: 100%;
    overflow: hidden;
}

header video {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: 0;
    -ms-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
}

header .container {
    position: relative;
    z-index: 2;
}

header .overlay {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: black;
    opacity: 0.5;
    z-index: 1;
}

/* Media Query for devices withi coarse pointers and no hover functionality */

/* This will use a fallback image instead of a video for devices that commonly do not support the HTML5 video element */

@media (pointer: coarse) and (hover: none) {
    header {
        background: url('<?php echo base_url() ?>assets/img/Video_Portada.jpg') black no-repeat center center scroll;
    }

    header video {
        display: none;
    }
}
</style>
<header>

    <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
    <div class="overlay"></div>

    <!-- The HTML5 video element that will create the background video on the header -->
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="<?php echo base_url() ?>assets/video/Video_Portada.mp4" type="video/mp4">
    </video>

    <!-- The header content -->
    <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white">
                <img src="<?php echo base_url() ?>assets/img/logo.png" class="img-fluid" alt="">
                <p class=" display-4 lead mb-0 my-3">Seguridad sinonimo de confianza</p>
            </div>
        </div>
    </div>
</header>



<!--Main layout-->
<main>
    <div class="container-fluid">
        <section class="text-center my-5 wow fadeIn">
            <h2 class="h1-responsive font-weight-bold my-5 white-text">Protege tus dependencias con nuestros equipos de
                seguridad</h2>
            <!-- Section description -->
            <p class="lead grey-text w-responsive mx-auto">Tenemos una amplia variedad de equipos de seguridad que se
                adaptan a todo lo que necesites proteger.</p>
            <p class="lead grey-text w-responsive mx-auto mb-5">¡Desde cámaras de seguridad hasta nuestra nueva app
                Smartpanics para que estés protegido donde quiera que vallas!</p>
            <div class="conteiner">
                <div class="row ">
                    <div class="col-9 mx-auto ">
                        <img class="img-fluid" src="<?php echo base_url() ?>assets/img/todo.png"
                            alt="Fotos de servicios de seguridad">
                    </div>
                </div>
            </div>
        </section>


        <!-- Section: Features v.1 -->
        <section class="text-center my-5 wow fadeIn">

            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold my-5 white-text">NUESTROS SERVICIOS</h2>
            <!-- Section description -->
            <p class="lead grey-text w-responsive mx-auto mb-5">Visita Nuesta amplia variedad de servicios!</p>

            <!-- Grid row -->
            <div class="row  mb-5">

                <!-- Grid column -->
                <div class="col-md-4">
                    <a href="http://localhost/VvSecurityWeb/index.php/Servicios#Seguridad">
                        <i class="fas fa-user-shield fa-3x cyan-text"></i>
                        <h5 class="font-weight-bold my-4 white-text">Guardias de seguridad</h5>
                    </a>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4">
                    <a href="http://localhost/VvSecurityWeb/index.php/Servicios#AseoIndustrial">
                        <i class="fas fa-broom fa-3x teal-text"></i>
                        <h5 class="font-weight-bold my-4 white-text">Aseo industrial</h5>
                    </a>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4">
                    <a href="http://localhost/VvSecurityWeb/index.php/TrackGuard">
                        <i class="fas fa-map-marker-alt fa-3x red-text"></i>
                        <h5 class="font-weight-bold my-4 white-text">Segimiento por GPS</h5>
                    </a>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->
            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4">
                    <a href="http://localhost/VvSecurityWeb/index.php/VideoVigilancia">
                        <i class="fas fa-video fa-3x white-text"></i>
                        <h5 class="font-weight-bold my-4 white-text">CCTV</h5>
                    </a>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4">
                    <a href="http://localhost/VvSecurityWeb/index.php/Servicios#Seguridad">
                        <i class="fas fa-bell fa-3x yellow-text"></i>
                        <h5 class="font-weight-bold my-4 white-text">Alarma domiciliaria</h5>
                    </a>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4">
                    <a href="http://localhost/VvSecurityWeb/index.php/SmartPanic">
                        <i class="fas fa-laptop fa-3x blue-text"></i>
                        <h5 class="font-weight-bold my-4 white-text ">Softwares de monitoreo</h5>
                    </a>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->
        </section>
        <!-- Section: Features v.1 -->

        <!-- Section: Features v.1 -->

        <hr class="my-5">
    </div>
    <div class="container-fluid">
        <section class="text-center my-5 wow fadeIn">
            <h2 class="h1-responsive font-weight-bold my-5 white-text">Siéntete seguro en todo momento con nuestra app
                Smartpanics </h2>
            <!-- Section description -->
            <p class="lead grey-text w-responsive mx-auto mb-5">SmartPanics es una aplicación que te permite reportar
                incidencias a las autoridades de manera fácil y rápida con múltiples funciones que te protegerán a ti y
                tus dependencias.</p>
            <div class="conteiner">
                <div class="row ">
                    <div class="col-9 mx-auto">
                        <img class="img-fluid" src="<?php echo base_url() ?>assets/img/NuevoSmartPanics.png"
                            alt="Fotos de servicios de seguridad">
                    </div>
                </div>
            </div>

        </section>

        <br><br>
        <section class="text-center mt-5 wow fadeIn">
            <div class="row">
                <div class="col-6">
                    <h3 class="h3-responsive font-weight-bold my-5 white-text">
                        Nunca estas solo con Smartpanics
                    </h3>
                    <p class="lead grey-text w-responsive mx-auto mb-5">
                        En caso de que te encuentres en una situación de emergencia, pulsa el botón SOS de SmartPanics y
                        te enviaremos ayudamos de inmediato desde nuestra Central de monitoreo.
                    </p>
                    <p class="lead grey-text w-responsive mx-auto mb-5">
                        Si no te sientes en peligro en el lugar donde te encuentras con el botón estoy aquí informa de
                        tu ubicación a nuestra central y en los grupos en los que te encuentres en SmartPanics
                    </p>
                </div>
                <div class="col-6 rounded-left img-card"
                    style="height: 700px; background-image: url('<?php echo base_url() ?>assets/img/tab1.jpg')">
                </div>
            </div>

        </section>

        <section class="text-center wow fadeIn">
            <div class="row">
                <div class="col-6 rounded-left img-card"
                    style="height: 700px; background-image: url('<?php echo base_url() ?>assets/img/incendio.jpg')">
                </div>
                <div class="col-6">
                    <h3 class="h3-responsive font-weight-bold my-5 white-text">
                        Botón de incendio
                    </h3>
                    <p class="lead grey-text w-responsive mx-auto mb-5">
                        En caso de fuego con el botón de incendio informa a nuestra central en cual responderemos
                        rápidamente llamando a bomberos y enviando personal a asistirte de manera inmediata.
                    </p>
                </div>

            </div>
        </section>

        <section class="text-center wow fadeIn">
            <div class="row">
                <div class="col-6">
                    <h3 class="h3-responsive font-weight-bold my-5 white-text">
                        Asistencia
                    </h3>
                    <p class="lead grey-text w-responsive mx-auto mb-5">
                        En caso de que requieras asistencia médica con el botón de asistencia enviaremos tanto a
                        servicios de salud como personal nuestro que te atenderán lo antes posible.
                    </p>
                </div>
                <div class="col-6 rounded-left img-card"
                    style="height: 700px; background-image: url('<?php echo base_url() ?>assets/img/ataque.jpg')">
                </div>
            </div>
        </section>
    </div>

    <div class="parallax">
        <div style="background: rgba(1, 1, 1, 0.6);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <h1 class="h1-responsive font-weight-bold my-5 white-text text-center">NOTICIAS</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <section id="NoticiasHome" class="text-center my-5 wow fadeIn">
            <!-- Section heading -->

            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3 wow bounceInLeft" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-5 img-card"
                                style="background-image: url('<?php echo base_url() ?>assets/img/iso.jpg')">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title">Nuestra compañía se certifica bajo la norma ISO 9001-2015.
                                    </h5>
                                    <p class="card-text">Demostrando un compromiso permanente con nuestros clientes y
                                        tras un arduo trabajo de implementación que comienza en el año 2019 , V & V
                                        Security logro certificar la norma ISO 9001-2015</p>
                                    <p class="card-text"><small class="text-muted">Ultima actualización hace 2
                                            años</small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">

                    <div class="card mb-3 wow bounceInRight" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-5 img-card"
                                style="background-image: url('<?php echo base_url() ?>assets/img/guardias.jpg')">

                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title">Nuevos cargos disponibles</h5>
                                    <p class="card-text">Siempre estamos solicitando colaboradores, por nuestro
                                        constante crecimiento laboral.</p>
                                    <p class="card-text"><small class="text-muted">Ultima actualización hace 1
                                            semana</small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
</main>