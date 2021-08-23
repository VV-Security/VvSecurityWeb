<Section>
<br><br><br><br>
<div class="container">
<div id="NavCat" class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a v-for="c in categorias" class="p-2 text-white" :href="'http://localhost/VvSecurityWeb/index.php/Noticias/' + c.Nombre" >{{c.Nombre}}</a>
    </nav>
  </div>
  <hr class="accessory">
<div id="main">
<h1 class="h1 text-white">{{$data.Titulo}}</h1>
    <div class="row">

    <div  v-for="n in Noticias" class="col-md-6">
      <a :href="Url+'/'+n.Titulo.replace(' ','_')">
                    <div class="card mb-3 wow bounceInLeft" style="max-width: 540px; visibility: visible; animation-name: bounceInLeft;">
                        <div class="row g-0">
                            <div class="col-md-5 img-card" :style="'background-image: url('+ n.img +')'">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                <strong class="d-inline-block mb-2 text-primary">{{$data.Titulo}}</strong>
                                    <h5 class="card-title">{{n.Titulo}}
                                    </h5>
                                    <p class="card-text">{{n.Contenido}}</p>
                                    <p class="card-text"><small class="text-muted">{{n.Fecha_registro}}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                </div>
                </div>
                </div>

</Section>

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/JsVueNoticias.js"></script>
  
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/JsVueCategorias.js"></script>
