<div class="container-fluid  text-white">
    <style>
        .Servicio-card {
            background: white;
            width: 300px;
            display: inline-block;
            margin: auto;
            border-radius: 19px;
            position: relative;
            text-align: center;
            box-shadow: -1px 15px 30px -12px black;
            z-index: 9999;
        }

        .Servicio-card__image {
            position: relative;
            height: 230px;
            margin-bottom: 35px;
            border-top-left-radius: 14px;
            border-top-right-radius: 14px;
        }

        .Servicio-card__image--Guardia2 {
            background: url("<?php echo base_url() ?>assets/img/oficinas.jpg");
        }

        .Servicio-card__image--Guardia2 img {
            width: 280px;
            position: absolute;
            top: -64px;
            left: 10px;
        }

        .Servicio-card__image--Guardia1 {
            background: url("<?php echo base_url() ?>assets/img/Condominio.jpg");
        }

        .Servicio-card__image--Guardia1 img {
            width: 270px;
            position: absolute;
            top: -88px;
            left: 15px;
        }

        .Servicio-card__image--Guardia3 {
            background: url("<?php echo base_url() ?>assets/img/rondas.jpg");
        }

        .Servicio-card__image--Guardia3 img {
            width: 300px;
            position: absolute;
            top: -77px;
            left: 0px;
        }

        .Servicio-card__image--Bombero {
            background: url("<?php echo base_url() ?>assets/img/Fuego.jpg");
        }

        .Servicio-card__image--Bombero img {
            width: 300px;
            position: absolute;
            top: -90px;
            left: 20px;
        }

        .Servicio-card__image--Aseo1 {
            background: url("<?php echo base_url() ?>assets/img/aseo2.jpeg");
        }

        .Servicio-card__image--Aseo1 img {
            width: 250px;
            position: absolute;
            top: -53px;
            left: 30px;
        }

        .Servicio-card__image--Aseo2 {
            background: url("<?php echo base_url() ?>assets/img/aseo3.jpg");
        }

        .Servicio-card__image--Aseo2 img {
            width: 250px;
            position: absolute;
            top: -123px;
            left: 30px;
        }

        .Servicio-card__image--Aseo3 {
            background: url("<?php echo base_url() ?>assets/img/industria1.png");
        }

        .Servicio-card__image--Aseo3 img {
            width: 250px;
            position: absolute;
            top: -123px;
            left: 30px;
        }

        .Servicio-card__image--Aseo4 {
            background: url("<?php echo base_url() ?>assets/img/Oficinas.jpg");
        }

        .Servicio-card__image--Aseo4 img {
            width: 250px;
            position: absolute;
            top: -96px;
            left: 30px;
        }

        .Servicio-card__image--Aseo5 {
            background: url("<?php echo base_url() ?>assets/img/industria2.jpg");
        }

        .Servicio-card__image--Aseo5 img {
            width: 280px;
            position: absolute;
            top: -63px;
            left: 30px;
        }

        .Servicio-card__image--Caseta1 {
            background: url("<?php echo base_url() ?>assets/img/fondon.jpg");
        }

        .Servicio-card__image--Caseta1 img {
            width: 320px;
            position: absolute;
            top: -20px;
            left: -10px;
        }

        .Servicio-card__image--Caseta2 {
            background: url("<?php echo base_url() ?>assets/img/fondon.jpg");
        }

        .Servicio-card__image--Caseta2 img {
            width: 280px;
            position: absolute;
            top: -63px;
            left: 15px;
        }

        .Servicio-card__image--radio {
            background: url("<?php echo base_url() ?>assets/img/fondon.jpg");
        }

        .Servicio-card__image--radio img {
            width: 110px;
            position: absolute;
            top: -153px;
            left: 80px;
        }

        .Servicio-card__unit-name {
            font-size: 20px;
            color: black;
            font-weight: 900;
            margin-bottom: 5px;
        }

        .Servicio-card__unit-description {
            padding: 20px;
            margin-bottom: 10px;
        }

        .Servicio-card__unit-stats--Guardia2 {
            background: #EC9B3B;
        }

        .Servicio-card__unit-stats--Guardia1 {
            background: #3498db;
        }

        .Servicio-card__unit-stats--Guardia3 {
            background: #27ae60;
        }

        .Servicio-card__unit-stats--Bombero {
            background: #d35400;
        }

        .Servicio-card__unit-stats--Aseo1 {
            background: #27ae60;
        }

        .Servicio-card__unit-stats--Aseo2 {
            background: #e67e22;
        }

        .Servicio-card__unit-stats--Aseo3 {
            background: #4FACFF;
        }

        .Servicio-card__unit-stats--Aseo4 {
            background: #e74c3c;
        }

        .Servicio-card__unit-stats--Aseo5 {
            background: #f1c40f;
        }

        .Servicio-card__unit-stats--Caseta1 {
            background: #2980b9;
        }

        .Servicio-card__unit-stats--Caseta2 {
            background: #c0392b;
        }

        .Servicio-card__unit-stats--radio {
            background: #c0392b;
        }

        .Servicio-card__unit-stats {
            color: white;
            font-weight: 700;
            border-bottom-left-radius: 14px;
            border-bottom-right-radius: 14px;
        }

        .Servicio-card__unit-stats .one-third {
            width: 100%;
            float: left;
            padding: 20px 15px;
        }

        .Servicio-card__unit-stats sup {
            position: absolute;
            bottom: 4px;
            font-size: 45%;
            margin-left: 2px;
        }

        .Servicio-card__unit-stats .stat {
            position: relative;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .Servicio-card__unit-stats .stat-value {
            text-transform: uppercase;
            font-weight: 400;
            font-size: 12px;
        }

        .Servicio-card__unit-stats .no-border {
            border-right: none;
        }

        .clearfix:after {
            visibility: hidden;
            display: block;
            font-size: 0;
            content: " ";
            clear: both;
            height: 0;
        }
    </style>
    <!--Inicio Servicios de seguridad-->
    <div class="" id="Servicio1">
        <h2 class="mt-5 h1 text-center">Servicios de seguridad</h2>
        <br><br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 my-5 text-center">
                    <div class="Servicio-card Guardia1">
                        <div class="Servicio-card__image Servicio-card__image--Guardia1">
                            <img src="<?php echo base_url() ?>assets/img/PngGuardia.png" alt="Guardia uno" />
                        </div>
                        <div class="Servicio-card__unit-name">Guardias de Seguridad</div>
                        <div class="Servicio-card__unit-description black-text">
                            Guardias de seguridad capacitados realizan servicios adaptados a las necesidades sus
                            compañías.
                        </div>

                        <a href="<?php echo site_url() ?>/Cotizacion">
                            <div class="Servicio-card__unit-stats Servicio-card__unit-stats--Guardia1 clearfix">
                                <div class="one-third">¡haz tu cotización aquí!</div>
                            </div>
                        </a>
                    </div>
                    <!-- end Servicio-card Guardia1-->
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 my-5  text-center">
                    <div class="Servicio-card Guardia2">
                        <div class="Servicio-card__image Servicio-card__image--Guardia2">
                            <img src="<?php echo base_url() ?>assets/img/PngGuardia2.png" alt="Guardia dos" />
                        </div>
                        <div class="Servicio-card__unit-name">Asesorías en Seguridad</div>
                        <div class="Servicio-card__unit-description black-text">
                            V&V Security conocen por la experiencia todos los matices que pueden poner en riesgo su
                            empresa, somos especialistas en evaluar y analizar los riesgos y vulnerabilidades de nuestros
                            clientes para ofrecer mejoras en todos los aspectos de la seguridad.
                        </div>

                        <a href="<?php echo site_url() ?>/Cotizacion">
                            <div class="Servicio-card__unit-stats Servicio-card__unit-stats--Guardia2 clearfix">
                                <div class="one-third">¡haz tu cotización aquí!</div>
                            </div>
                        </a>
                    </div>
                    <!-- end Servicio-card Guardia2-->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 my-5  text-center">
                    <div class="Servicio-card Guardia3">
                        <div class="Servicio-card__image Servicio-card__image--Guardia3">
                            <img src="<?php echo base_url() ?>assets/img/PngGuardia3.png" alt="Guardia Tres" />
                        </div>
                        <div class="Servicio-card__unit-name">Supervisor Rondas</div>
                        <div class="Servicio-card__unit-description black-text">
                            El supervisor de rondas es oportunidad para las empresas que necesitan seguridad sin
                            tener un costo fijo de un guardia 24 horas. Mediante rondas de seguridad a sus compañías podemos
                            detectar riesgos e informar en tiempo real acerca de situaciones anómalas.
                        </div>

                        <a href="<?php echo site_url() ?>/Cotizacion">
                            <div class="Servicio-card__unit-stats Servicio-card__unit-stats--Guardia3 clearfix">
                                <div class="one-third">¡haz tu cotización aquí!</div>
                            </div>
                        </a>
                    </div>
                    <!-- end Servicio-card Guardia3-->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 my-5 text-center">
                    <div class="Servicio-card Bombero">
                        <div class="Servicio-card__image Servicio-card__image--Bombero">
                            <img src="<?php echo base_url() ?>assets/img/Bomberos.png" alt="Bomberos" />
                        </div>
                        <div class="Servicio-card__unit-name">Protección Incendios</div>
                        <div class="Servicio-card__unit-description black-text">
                            Realizamos estudios para los sitios vulnerables a la propagación de incendios, colocando
                            una gama de elementos tecnológico para la prevención y extinción eficaz en caso de amagos de
                            incendios.
                        </div>
                        <a href="<?php echo site_url() ?>/Cotizacion">
                            <div class="Servicio-card__unit-stats Servicio-card__unit-stats--Bombero clearfix">
                                <div class="one-third">¡haz tu cotización aquí!</div>
                            </div>
                        </a>
                    </div>
                    <!-- end Servicio-card Bombero-->
                </div>
            </div>
        </div>
        <br><br><br>
    </div>
    <!--Fin Servicios de seguridad-->

    <!--Inicio Drones-->
    <div class=" " id="Servicio2" style="display: none;">
        <h1 class="mt-5 h1">Drones</h1>
        <img src="https://www.vvsecurity.cl/wp-content/uploads/2019/02/pexels-photo-53903-820x410.jpg" alt="Dron">
    </div>
    <!--Fin Drones-->


    <!--Inicio aseo industrial-->
    <div class=" " id="Servicio3" style="display: none;">
        <h2 class="mt-5 h1 text-center">Servicios de seguridad</h2>
        <p class="text-center mb-5">V&V Service realiza el servicio de aseo industrial, de acuerdo a las distintas necesidades de cada cliente:
        </p>
        <br><br>
        <div class="container">
            <div class="row">
                <!-- Incio Servicio-card Aseo1-->
                <div class="col-lg-4 col-md-6 col-sm-12 my-5 text-center">
                    <div class="Servicio-card Aseo1">
                        <div class="Servicio-card__image Servicio-card__image--Aseo1">
                            <img src="<?php echo base_url() ?>assets/img/aseo.png" alt="Guardia uno" />
                        </div>
                        <div class="Servicio-card__unit-name">Limpieza de Planta Interior</div>
                        <div class="Servicio-card__unit-description black-text">
                            Descripcion Proximante...
                        </div>

                        <a href="<?php echo site_url() ?>/Cotizacion">
                            <div class="Servicio-card__unit-stats Servicio-card__unit-stats--Aseo1 clearfix">
                                <div class="one-third">¡haz tu cotización aquí!</div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end Servicio-card Aseo1-->
                <!-- Incio Servicio-card Aseo2-->
                <div class="col-lg-4 col-md-6 col-sm-12 my-5 text-center">
                    <div class="Servicio-card Aseo2">
                        <div class="Servicio-card__image Servicio-card__image--Aseo2">
                            <img src="<?php echo base_url() ?>assets/img/Limpieza.png" alt="Guardia uno" />
                        </div>
                        <div class="Servicio-card__unit-name">Limpieza de Bodegas</div>
                        <div class="Servicio-card__unit-description black-text">
                            Descripcion Proximante...
                        </div>

                        <a href="<?php echo site_url() ?>/Cotizacion">
                            <div class="Servicio-card__unit-stats Servicio-card__unit-stats--Aseo2 clearfix">
                                <div class="one-third">¡haz tu cotización aquí!</div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end Servicio-card Aseo2-->
                <!-- Incio Servicio-card Aseo3-->
                <div class="col-lg-4 col-md-6 col-sm-12 my-5 text-center">
                    <div class="Servicio-card Aseo3">
                        <div class="Servicio-card__image Servicio-card__image--Aseo3">
                            <img src="<?php echo base_url() ?>assets/img/Plimpiando.png" alt="Guardia uno" />
                        </div>
                        <div class="Servicio-card__unit-name">Limpieza de áreas de trabajo pesado</div>
                        <div class="Servicio-card__unit-description black-text">
                            Descripcion Proximante...
                        </div>

                        <a href="<?php echo site_url() ?>/Cotizacion">
                            <div class="Servicio-card__unit-stats Servicio-card__unit-stats--Aseo3 clearfix">
                                <div class="one-third">¡haz tu cotización aquí!</div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end Servicio-card Aseo3-->
                <!-- Incio Servicio-card Aseo4-->
                <div class="col-lg-4 col-md-6 col-sm-12 my-5 text-center">
                    <div class="Servicio-card Aseo4">
                        <div class="Servicio-card__image Servicio-card__image--Aseo4">
                            <img src="<?php echo base_url() ?>assets/img/limpiezaLuces.png" alt="Guardia uno" />
                        </div>
                        <div class="Servicio-card__unit-name">Limpieza de luminarias</div>
                        <div class="Servicio-card__unit-description black-text">
                            Limpieza de luminarias en altura en lugares de gran polución de polvo entre otros.
                        </div>
                        <a href="<?php echo site_url() ?>/Cotizacion">
                            <div class="Servicio-card__unit-stats Servicio-card__unit-stats--Aseo4 clearfix">
                                <div class="one-third">¡haz tu cotización aquí!</div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end Servicio-card Aseo4-->
                <!-- Incio Servicio-card Aseo5-->
                <div class="col-lg-4 col-md-6 col-sm-12 my-5 text-center">
                    <div class="Servicio-card Aseo5">
                        <div class="Servicio-card__image Servicio-card__image--Aseo5">
                            <img src="<?php echo base_url() ?>assets/img/mantenimiento.png" alt="Guardia uno" />
                        </div>
                        <div class="Servicio-card__unit-name">Servicio generales de mantención.</div>
                        <div class="Servicio-card__unit-description black-text">
                            Descripcion Proximante...
                        </div>
                        <a href="<?php echo site_url() ?>/Cotizacion">
                            <div class="Servicio-card__unit-stats Servicio-card__unit-stats--Aseo5 clearfix">
                                <div class="one-third">¡haz tu cotización aquí!</div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end Servicio-card Aseo5-->
            </div>
        </div>
    </div>
    <!--Fin Aseo insdustrial-->


    <!--Incio Arriendo casetas-->
    <div class=" " id="Servicio4" style="display: none;">
        <h2 class="mt-5 h1 text-center">Arriendo de casetas de vigilancia</h2>

        <br><br>
        <div class="container">
            <div class="row">

                <!-- Incio Servicio-card Caseta1-->
                <div class="col-lg-4 col-md-6 col-sm-12 my-5 text-center">
                    <div class="Servicio-card Caseta1">
                        <div class="Servicio-card__image Servicio-card__image--Caseta1">
                            <img src="<?php echo base_url() ?>assets/img/caseta1.png" alt="Guardia uno" />
                        </div>
                        <div class="Servicio-card__unit-name">Gama Box</div>
                        <div class="Servicio-card__unit-description black-text">
                            <p>Alto: 2420 mm</p>
                            <p>Largo: 2700 mm</p>
                            <p>Ancho: 1500 mm</p>
                            <p>Peso Aprox: 400 kg</p>
                        </div>
                        <a href="<?php echo site_url() ?>/Cotizacion">
                            <div class="Servicio-card__unit-stats Servicio-card__unit-stats--Caseta1 clearfix">
                                <div class="one-third">¡haz tu cotización aquí!</div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end Servicio-card Caseta1-->

                <!-- Incio Servicio-card Caseta2-->
                <div class="col-lg-4 col-md-6 col-sm-12 my-5 text-center">
                    <div class="Servicio-card Caseta2">
                        <div class="Servicio-card__image Servicio-card__image--Caseta2">
                            <img src="<?php echo base_url() ?>assets/img/caseta2.png" alt="Guardia uno" />
                        </div>
                        <div class="Servicio-card__unit-name">Beta Box</div>
                        <div class="Servicio-card__unit-description black-text">
                            <p>Alto: 2420 mm</p>
                            <p>Largo: 2700 mm</p>
                            <p>Ancho: 1500 mm</p>
                            <p>Peso Aprox: 400 kg</p>
                        </div>
                        <a href="<?php echo site_url() ?>/Cotizacion">
                            <div class="Servicio-card__unit-stats Servicio-card__unit-stats--Caseta2 clearfix">
                                <div class="one-third">¡haz tu cotización aquí!</div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end Servicio-card Caseta2-->

            </div>
        </div>
    </div>
    <!--Fin Arriendo casetas-->

    <!--Incio Radios-->
    <div class=" " id="Servicio5" style="display: none;">
        <h2 class="mt-5 h1 text-center">Arriendo de Radios</h2>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <!-- Incio Servicio-card radio-->
                <div class="col-lg-4 col-md-6 col-sm-12 my-5 text-center">
                    <div class="Servicio-card radio">
                        <div class="Servicio-card__image Servicio-card__image--radio">
                            <img src="<?php echo base_url() ?>assets/img/radio.png" alt="Guardia uno" />
                        </div>
                        <div class="Servicio-card__unit-name">Radios</div>
                        <div class="Servicio-card__unit-description black-text">
                            <p>Radios Baofeng</p>
                            <p>Distancia de 1 a 5 km</p>
                            <p>Aplicable en entornos como hoteles, oficinas, construcciones, turismo, vigilancia u otros.</p>
                        </div>
                        <a href="<?php echo site_url() ?>/Cotizacion">
                            <div class="Servicio-card__unit-stats Servicio-card__unit-stats--radio clearfix">
                                <div class="one-third">¡haz tu cotización aquí!</div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end Servicio-card radio-->
            </div>
        </div>
    </div>
    <!--Fin Radios-->
</div>

<!--Cierre sidenav-->
</div>
</div>
<!--Cierre sienav-->