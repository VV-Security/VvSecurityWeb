<main>
    <!--############### CAROUSEL ################-->
    <div class="col s12 l12">
        <div class="carousel carousel-slider center slides" data-indicators="true">
            <div class="carousel carousel-slider">
                <a class="carousel-item " href="#two!">
                    <img src="<?php echo base_url() ?>assets/img/CarruselGGSS.png" class="responsive-img">
                </a>
                <a class="carousel-item " href="#two!">
                    <img src="<?php echo base_url() ?>assets/img/CarruselAseoInd2.png" class="responsive-img">
                </a>
                <a class="carousel-item" href="#three!">
                    <img src="<?php echo base_url() ?>assets/img/CarruselGps1.png" class="responsive-img">
                </a>
                <a class="carousel-item" href="#four!">
                    <img src="<?php echo base_url() ?>assets/img/CarruselCCTV1.png" class="responsive-img">
                </a>
                <a class="carousel-item" href="#four!">
                    <img src="<?php echo base_url() ?>assets/img/CarruselAlarma.png" class="responsive-img">
                </a>
                <a class="carousel-item" href="#four!">
                    <img src="<?php echo base_url() ?>assets/img/CarruselSoft.png" class="responsive-img">
                </a>
            </div>
        </div>
    </div>
    <!--############### end CAROUSEL ################-->

    <!--############### begin ACCESOS  ################-->
    <div class="col s12 l12">
        <br><br>
        <div class="row">
            <div class="col s6 l2">
                <br>
                <br>
                <p></p>
                <div class="card-panel center-align">
                    <a class="waves-effect waves-light modal-trigger center black-text" href="#modal1">
                        <i class="material-icons center black-text large">open_in_new</i></a>

                </div>
            </div>
            <div class="col s6 l2">
                <br>
                <br>
                <p></p>
                <div class="card-panel hoverable">Control Covid 19</div>
            </div>
            <div class="col s6 l2">
                <br>
                <br>
                <p></p>
                <div class="card-panel">Norma ISO</div>
            </div>
            <div class="col s6 l2">
                <br>
                <br>
                <p></p>
                <div class="card-panel">Reclamos</div>
            </div>
            <!-- Bolsa de Trabajo -->
            <div class="col s12 l4 blue">
                <div class="center-align">
                    <p class="white-text"><b>BOLSA DE TRABAJO</b></p>
                </div>
                <div class="col s6 l6">
                    <div class="card-panel">Oferta Supervisor</div>
                </div>
                <div class="col s6 l6">
                    <div class="card-panel">GG SS empleos </div>
                </div>

            </div>
        </div>
    </div>
    <!--############### end ACCESOS  ################-->


    <div class="container">
        <div class="divider"></div>
    </div>



    <!--############### begin SERVICIOS ################-->
    <div>
        <br>
        <br>
        <div class="section">
            <div class="col s12 l12 center-align blue-text text-darken-4">
                <h3><b>NUESTROS SERVICIOS</b></h3>
                <br>
            </div>
            <div class="row">
                <div class="col s6 l2">
                    <div class="row">
                        <div class="col s12 l12 center-align hoverable">
                            <a href="#">
                                <br>
                                <i class="large material-icons">admin_panel_settings</i>
                                <br>
                                <br>
                                <p><b>GUARDIA DE SEGURIDAD</b></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col s6 l2">
                    <div class="row">
                        <div class="col s12 l12 center-align hoverable">
                            <a href="#">
                                <br>
                                <i class="large material-icons">cleaning_services</i>
                                <br>
                                <br>
                                <p><b>ASEO INDUSTRIAL</b></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col s6 l2">
                    <div class="row">
                        <div class="col s12 l12 center-align hoverable">
                            <a href="#">
                                <br>
                                <i class="large material-icons">share_location</i>
                                <br>
                                <br>
                                <p><b>G P S</b></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col s6 l2">
                    <div class="row">
                        <div class="col s12 l12 center-align hoverable">
                            <a href="#">
                                <br>
                                <i class="large material-icons">camera_outdoor</i>
                                <br>
                                <br>
                                <p><b> C C T V </b></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col s6 l2">
                    <div class="row">
                        <div class="col s12 l12 center-align hoverable">
                            <a href="#">
                                <br>
                                <i class="large material-icons">doorbell</i>
                                <br>
                                <br>
                                <p><b>ALARMA DOMICILIARIA</b></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col s6 l2">
                    <div class="row">
                        <div class="col s12 l12 center-align hoverable">
                            <a href="#">
                                <br>
                                <i class="large material-icons">devices</i>
                                <br>
                                <br>
                                <p><b>SOFTWARE</b></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--############### end SERVICIOS ################-->



    <!--############### begin PARALLAX ################-->
    <div class="parallax-container">
        <div class="parallax">
            <img src="<?php echo base_url() ?>assets/img/Enpavonado 2 parallax.png" class="responsive-img" />
        </div>
    </div>
    <!--############### end PARALLAX ################-->

    <pre>

                {{$data}}
    </pre>

</main>

<!--Import jQuery before materialize.js-->
<script type=" text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js">
</script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/indexWelcome.js"></script>
</body>
<?php $this->load->view('templates/footer'); ?>