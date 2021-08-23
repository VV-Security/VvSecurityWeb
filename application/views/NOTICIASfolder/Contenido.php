<br><br><br><br>
<div class="container mb-4">
<div id="NavCat" class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a v-for="c in categorias" class="p-2 text-white" :href="'http://localhost/VvSecurityWeb/index.php/Noticias/' + c.Nombre" >{{c.Nombre}}</a>
    </nav>
  </div>
  <hr class="accessory">
      <Section id="Conte">
          <div class="row">
              <div v-for="c in Contenido" class="col-md-12">
                <p class="text-light">{{c.Fecha_registro}}</p>
          <h2 class="h2 text-white mt-4">
             {{c.Titulo}}
          </h2>

          <img  class="img-fluid my-3 align-items-center" :src="c.img" alt="">
<p class="text-white">
{{c.Contenido}}
</p>
              </div>
          </div>

      </Section>
  </div>
  




<script type="text/javascript" src="<?php echo base_url() ?>assets/js/JsVueNoticias.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/JsVueContenido.js"></script>

