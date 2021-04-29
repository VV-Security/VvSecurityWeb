<main>
    <!--############### CAROUSEL ################-->
    <div class="col s12 l12">
        <div class="carousel carousel-slider center slides" data-indicators="true">
            <div class="carousel carousel-slider">
                <a class="carousel-item hoverable" href="#two!">
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
        <!--############### end CAROUSEL ################-->


        <!--############### img PARALLAX ################-->
        <div class="parallax-container">
            <div class="parallax">
                <img src="<?php echo base_url() ?>assets/img/Enpavonado 2 parallax.png" />
            </div>
        </div>

        <!--############### end PARALLAX ################-->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col s12 l12 center">
                        <h2><strong>Nuestro Diferenciales</strong></h2>
                    </div>
                </div>
            </div>
        </div>

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
<style>

</style>
</body>
<?php $this->load->view('templates/footer'); ?>