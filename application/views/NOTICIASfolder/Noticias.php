<style>
    /* stylelint-disable selector-list-comma-newline-after */

    .blog-header {
        line-height: 1;
        border-bottom: 1px solid #e5e5e5;
    }

    .blog-header-logo {
        font-family: "Playfair Display", Georgia, "Times New Roman", serif;
        font-size: 2.25rem;
    }

    .blog-header-logo:hover {
        text-decoration: none;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Playfair Display", Georgia, "Times New Roman", serif;
    }

    .display-4 {
        font-size: 2.5rem;
    }

    @media (min-width: 768px) {
        .display-4 {
            font-size: 3rem;
        }
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .nav-scroller .nav-link {
        padding-top: .75rem;
        padding-bottom: .75rem;
        font-size: .875rem;
    }

    .card-img-right {
        height: 100%;
        border-radius: 0 3px 3px 0;
    }

    .flex-auto {
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    }

    .h-250 {
        height: 250px;
    }

    @media (min-width: 768px) {
        .h-md-250 {
            height: 250px;
        }
    }

    /* Pagination */
    .blog-pagination {
        margin-bottom: 4rem;
    }

    .blog-pagination>.btn {
        border-radius: 2rem;
    }

    /*
 * Blog posts
 */
    .blog-post {
        margin-bottom: 4rem;
    }

    .blog-post-title {
        margin-bottom: .25rem;
        font-size: 2.5rem;
    }

    .blog-post-meta {
        margin-bottom: 1.25rem;
        color: #999;
    }

    /*
 * Footer
 */
    .blog-footer {
        padding: 2.5rem 0;
        color: #999;
        text-align: center;
        background-color: #f9f9f9;
        border-top: .05rem solid #e5e5e5;
    }

    .blog-footer p:last-child {
        margin-bottom: 0;
    }

    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>
<br>
<br>
<br>
<br>
<div class="container">
    <div id="NavCat" class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a v-for="c in categorias" class="p-2 text-white" :href="'http://localhost/VvSecurityWeb/index.php/Noticias/' + c.Nombre">{{c.Nombre}}</a>
        </nav>
    </div>

    <Section id="Recientes">
        <div class="row row-cols-auto mb-2">
            <div class="jumbotron col-md-12 p-4 p-md-5 text-white rounded" :style="'background-image: url('+Recientes[0].img+'); background-repeat: no-repeat; background-size: cover;'">
                <div class="col-md-6 px-0" style="background-color: rgb(0,0,0,0.5);">
                    <h1 class="display-4 font-italic">{{Recientes[0].Titulo}}</h1>
                    <p class="lead my-3">{{Recientes[0].Contenido}}</p>
                    <p class="lead mb-0"><a :href="'http://localhost/VvSecurityWeb/index.php/Noticias'+'/'+Recientes[0].Nombre.replaceAll(' ','_')+'/'+Recientes[0].Titulo.replaceAll(' ','_')" class="text-white font-weight-bold">Continua leyendo...</a></p>
                </div>
            </div>
         
            <diV v-for="(r,index) in Borrar" class="col-md-6">
                <a :href="'http://localhost/VvSecurityWeb/index.php/Noticias'+'/'+r.Nombre.replaceAll(' ','_')+'/'+r.Titulo.replaceAll(' ','_')">
                    <div class="card mb-3 wow bounceInLeft" style="max-width: 540px; visibility: visible; animation-name: bounceInLeft;">
                        <div class="row g-0">
                            <div class="col-md-5 img-card" :style="'background-image: url('+ r.img +')'">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <strong class="d-inline-block mb-2 text-primary">{{r.Nombre}}</strong>
                                    <h5 class="card-title">{{r.Titulo}}
                                    </h5>
                                    <p class="card-text">{{r.Contenido}}</p>
                                    <p class="card-text"><small class="text-muted">{{r.Fecha_registro}}</small></p>
                                </div>
                            </div>
                        </div>
                </a>
            </div>
        </div>
</div>
</Section>
</div>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/JsVueNoticias.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/JsVueRecientes.js"></script>