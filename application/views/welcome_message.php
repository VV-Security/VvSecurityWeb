<main>
    <!--############### CAROUSEL ################-->
    <div class="row">
        <div class="col s12 center-align">
            <br>
            <div class="slider responsive-img">
                <ul class="slides responsive-img">
                    <li class="responsive-img">
                        <img src="#" class="responsive-img" />
                        <div class="caption left-align responsive-img">
                            <h3 class="black-text">Cámaras de Seguridad</h3>
                            <h5 class="black-text">Monitorea todo desde cualquier lugar</h5>
                        </div>
                    </li>
                    <li>
                        <img src="#" class="responsive-img" />
                        <div class="caption center-align responsive-img">
                            <h3 class="black-text">Seguimiento en vivo</h3>
                            <h5 class="black-text">Regula los limites de velocidad y limites de zona de tus
                                vehículos
                            </h5>
                        </div>
                    </li>
                    <li>
                        <img src="#" class="responsive-img" />
                        <div class="caption right-align responsive-img">
                            <h3 class="black-text">Kit de Alarma</h3>
                            <h5 class="black-text">Todo la información en una aplicación</h5>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <!--############### end CAROUSEL ################-->

    <!--############### img PARALLAX ################-->

    <div class="parallax-container valign-wrapper">
        <div class="parallax">
            <img src="<?php echo base_url() ?>assets/img/softguard-grey original.jpg" />
        </div>



    </div>
    <!--############### end PARALLAX ################-->


    <pre>

                {{$data}}
    </pre>

</main>




<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/indexWelcome.js"></script>

</body>
<?php $this->load->view('templates/footer'); ?>