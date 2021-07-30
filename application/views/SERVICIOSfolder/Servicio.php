<div class="container-fluid  text-white">
    <style>
        .clash-card {
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

        .clash-card__image {
            position: relative;
            height: 230px;
            margin-bottom: 35px;
            border-top-left-radius: 14px;
            border-top-right-radius: 14px;
        }

        .clash-card__image--Guardia2 {
            background: url("<?php echo base_url() ?>assets/img/oficinas.jpg");
        }

        .clash-card__image--Guardia2 img {
            width: 280px;
            position: absolute;
            top: -64px;
            left: 10px;
        }

        .clash-card__image--Guardia1 {
            background: url("<?php echo base_url() ?>assets/img/Condominio.jpg");
        }

        .clash-card__image--Guardia1 img {
            width: 270px;
            position: absolute;
            top: -88px;
            left: 15px;
        }

        .clash-card__image--Guardia3 {
            background: url("<?php echo base_url() ?>assets/img/rondas.jpg");
        }

        .clash-card__image--Guardia3 img {
            width: 300px;
            position: absolute;
            top: -77px;
            left: 0px;
        }

        .clash-card__image--Bombero {
            background: url("<?php echo base_url() ?>assets/img/Fuego.jpg");
        }

        .clash-card__image--Bombero img {
            width: 300px;
            position: absolute;
            top: -90px;
            left: 20px;
        }

        .clash-card__image--Aseo1 {
            background: url("<?php echo base_url() ?>assets/img/Oficinas.jpg");
        }

        .clash-card__image--Aseo1 img {
            width: 250px;
            position: absolute;
            top: -123px;
            left: 30px;
        }

        .clash-card__unit-name {
            font-size: 20px;
            color: black;
            font-weight: 900;
            margin-bottom: 5px;
        }

        .clash-card__unit-description {
            padding: 20px;
            margin-bottom: 10px;
        }

        .clash-card__unit-stats--Guardia2 {
            background: #EC9B3B;
        }

        .clash-card__unit-stats--Guardia1 {
            background: #3498db;
        }

        .clash-card__unit-stats--Guardia3 {
            background: #27ae60;
        }

        .clash-card__unit-stats--Bombero {
            background: #d35400;
        }

        .clash-card__unit-stats--Aseo1 {
            background: #4FACFF;
        }

        .clash-card__unit-stats {
            color: white;
            font-weight: 700;
            border-bottom-left-radius: 14px;
            border-bottom-right-radius: 14px;
        }

        .clash-card__unit-stats .one-third {
            width: 100%;
            float: left;
            padding: 20px 15px;
        }

        .clash-card__unit-stats sup {
            position: absolute;
            bottom: 4px;
            font-size: 45%;
            margin-left: 2px;
        }

        .clash-card__unit-stats .stat {
            position: relative;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .clash-card__unit-stats .stat-value {
            text-transform: uppercase;
            font-weight: 400;
            font-size: 12px;
        }

        .clash-card__unit-stats .no-border {
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
                    <div class="clash-card Guardia1">
                        <div class="clash-card__image clash-card__image--Guardia1">
                            <img src="<?php echo base_url() ?>assets/img/PngGuardia.png" alt="Guardia uno" />
                        </div>
                        <div class="clash-card__unit-name">Guardias de Seguridad</div>
                        <div class="clash-card__unit-description black-text">
                            Guardias de seguridad capacitados realizan servicios adaptados a las necesidades sus
                            compañías.
                        </div>

                        <a href="<?php echo site_url() ?>/Cotizacion">
                            <div class="clash-card__unit-stats clash-card__unit-stats--Guardia1 clearfix">
                                <div class="one-third">¡haz tu cotización aquí!</div>
                            </div>
                        </a>
                    </div>
                    <!-- end clash-card Guardia1-->
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 my-5  text-center">
                    <div class="clash-card Guardia2">
                        <div class="clash-card__image clash-card__image--Guardia2">
                            <img src="<?php echo base_url() ?>assets/img/PngGuardia2.png" alt="Guardia dos" />
                        </div>
                        <div class="clash-card__unit-name">Asesorías en Seguridad</div>
                        <div class="clash-card__unit-description black-text">
                            V&V Security conocen por la experiencia todos los matices que pueden poner en riesgo su
                            empresa, somos especialistas en evaluar y analizar los riesgos y vulnerabilidades de nuestros
                            clientes para ofrecer mejoras en todos los aspectos de la seguridad.
                        </div>

                        <a href="<?php echo site_url() ?>/Cotizacion">
                            <div class="clash-card__unit-stats clash-card__unit-stats--Guardia2 clearfix">
                                <div class="one-third">¡haz tu cotización aquí!</div>
                            </div>
                        </a>
                    </div>
                    <!-- end clash-card Guardia2-->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 my-5  text-center">
                    <div class="clash-card Guardia3">
                        <div class="clash-card__image clash-card__image--Guardia3">
                            <img src="<?php echo base_url() ?>assets/img/PngGuardia3.png" alt="Guardia Tres" />
                        </div>
                        <div class="clash-card__unit-name">Supervisor Rondas</div>
                        <div class="clash-card__unit-description black-text">
                            El supervisor de rondas es oportunidad para las empresas que necesitan seguridad sin
                            tener un costo fijo de un guardia 24 horas. Mediante rondas de seguridad a sus compañías podemos
                            detectar riesgos e informar en tiempo real acerca de situaciones anómalas.
                        </div>

                        <a href="<?php echo site_url() ?>/Cotizacion">
                            <div class="clash-card__unit-stats clash-card__unit-stats--Guardia3 clearfix">
                                <div class="one-third">¡haz tu cotización aquí!</div>
                            </div>
                        </a>
                    </div>
                    <!-- end clash-card Guardia3-->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 my-5 text-center">
                    <div class="clash-card Bombero">
                        <div class="clash-card__image clash-card__image--Bombero">
                            <img src="<?php echo base_url() ?>assets/img/Bomberos.png" alt="Bomberos" />
                        </div>
                        <div class="clash-card__unit-name">Protección Incendios</div>
                        <div class="clash-card__unit-description black-text">
                            Realizamos estudios para los sitios vulnerables a la propagación de incendios, colocando
                            una gama de elementos tecnológico para la prevención y extinción eficaz en caso de amagos de
                            incendios.
                        </div>
                        <a href="<?php echo site_url() ?>/Cotizacion">
                            <div class="clash-card__unit-stats clash-card__unit-stats--Bombero clearfix">
                                <div class="one-third">¡haz tu cotización aquí!</div>
                            </div>
                        </a>
                    </div>
                    <!-- end clash-card Bombero-->
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
        <h1 class="mt-5 h1">Aseo Industrial</h1>
        <p>V&V Service realiza el servicio de aseo industrial, de acuerdo a las distintas necesidades de cada cliente:
        </p>
            <div class="container">
                <div class="row">
                     <!-- Incio clash-card Aseo1-->
                <div class="col-lg-4 col-md-6 col-sm-12 my-5 text-center">
                    <div class="clash-card Aseo1">
                        <div class="clash-card__image clash-card__image--Aseo1">
                            <img src="<?php echo base_url() ?>assets/img/Limpieza.png" alt="Guardia uno" />
                        </div>
                        <div class="clash-card__unit-name">Limpieza de Planta Interior</div>
                        <div class="clash-card__unit-description black-text">
                            Descripcion Proximante...
                        </div>

                        <a href="<?php echo site_url() ?>/Cotizacion">
                            <div class="clash-card__unit-stats clash-card__unit-stats--Aseo1 clearfix">
                                <div class="one-third">¡haz tu cotización aquí!</div>
                            </div>
                        </a>
                    </div>
                    <!-- end clash-card Aseo1-->
                </div>
                </div>
            </div>



        <ul>
            <li>Limpieza de Planta Interior</li>
            <li>Limpieza de Bodegas</li>
            <li>Limpieza de áreas de trabajo pesado.</li>
            <li>Limpieza de luminarias en altura en lugares de gran polución de polvo entre otros.</li>
            <li>Servicio generales de mantención.</li>
        </ul>
    </div>
    <!--Fin Aseo insdustrial-->


    <!--Incio Arriendo casetas-->
    <div class=" " id="Servicio4" style="display: none;">
        <h1 class="mt-5 h1">Arriendo de casetas de vigilancia</h1>

        <div class="row featurette my-5">
            <div class="col-md-7 order-md-2">
                <h2 class="h2">Gama Box</h2>
                <ul>
                    <li><strong>Marca:</strong>FIBOX</li>
                    <li><strong>Modelo:</strong> Gama Box</li>
                    <li>Alto: 2420 mm</li>
                    <li>Largo: 2700 mm</li>
                    <li>Ancho: 1500 mm</li>
                    <li>Peso Aprox: 400 kg</li>
                    <li>Material: Fibra de vidrio, anticorrosivo y lavable.</li>
                    <li>Paredes: Dobles, efecto sandwich, aislamiento de espuma de poliuretano.</li>
                    <li>Base: Chasis galvanizado.</li>
                    <li>Piso: Panel de cemento inoloro e incombustible, con goma antideslizante.</li>
                    <li>Techo: Protección contra agua, la nieve y el polvo. Aislamiento de espuma de poliuretano.</li>
                </ul>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="https://www.vvsecurity.cl/wp-content/uploads/2019/02/f_gama.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
            </div>
        </div>
        <div class="row featurette my-5">
            <div class="col-md-6">
                <img src="img/gamabox1.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto img-thumbnail">
            </div>
            <div class="col-md-6">
                <img src="img/gamabox2.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto img-thumbnail">
            </div>

        </div>

        <hr class="my-5">

        <div class="row featurette my-5">
            <div class="col-md-7">
                <h2 class="h2">Beta Box</h2>
                <ul>
                    <li><strong>Marca:</strong>FIBOX</li>
                    <li><strong>Modelo:</strong> Beta Box</li>
                    <li>Alto: 2420 mm</li>
                    <li>Largo: 2150 mm</li>
                    <li>Ancho: 1500 mm</li>
                    <li>Peso Aprox: 400 kg</li>
                    <li>Material: Fibra de vidrio, anticorrosivo y lavable.</li>
                    <li>Paredes: Dobles, efecto sandwich, aislamiento de espuma de poliuretano.</li>
                    <li>Base: Chasis galvanizado.</li>
                    <li>Piso: Panel de cemento inoloro e incombustible, con goma antideslizante.</li>
                    <li>Techo: Protección contra agua, la nieve y el polvo. Aislamiento de espuma de poliuretano.</li>
                </ul>
            </div>
            <div class="col-md-5">
                <img src="https://www.vvsecurity.cl/wp-content/uploads/2019/02/f_beta.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
            </div>
        </div>
        <div class="row featurette my-5">
            <div class="col-md-4">
                <img src="img/betabox1.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto img-thumbnail" width="400" height="400">
            </div>
            <div class="col-md-4">
                <img src="img/betabox2.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto img-thumbnail" width="400" height="400">
            </div>
            <div class="col-md-4">
                <img src="img/betabox3.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto img-thumbnail" width="400" height="400">
            </div>
        </div>
    </div>
    <!--Fin Arriendo casetas-->

    <!--Incio Radios-->
    <div class=" " id="Servicio5" style="display: none;">
        <h1 class="mt-5 h1">Arriendo de Radios</h1>
        <div class="row featurette">
            <div class="col-md-7">
                <ul>
                    <li> Radios Baofeng</li>
                    <li> Distancia de 1 a 5 km.</li>
                    <li>Aplicable en entornos como hoteles, oficinas, construcciones, turismo, vigilancia u otros.></li>
                </ul>
            </div>
            <div class="col-md-5">
                <img src="https://www.vvsecurity.cl/wp-content/uploads/2019/02/Captura-de-pantalla-2017-10-18-a-las-17.13.24-381x400.png" width="300" height="300" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
            </div>
        </div>
    </div>
    <!--Fin Radios-->
</div>

<!--Cierre sidenav-->
</div>
</div>
<!--Cierre sienav-->