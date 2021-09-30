<!-- rescatamos el usuario creado desde la session --> <?php $user = $this->session->userdata('user'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" href="<?php echo base_url() ?>assets/img/logo.png">
    <title>V&V SECURITY</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.0/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/compiled-4.9.0.min.css">
    <!--Estilos propios -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Hola </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?echo site_url() ?>">Cotizaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?echo site_url() ?>">Noticias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?echo site_url() ?>">Ofertas Laborales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?echo site_url() ?>">Requerimientos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?echo site_url() ?>/Usuario">Usuarios</a>
                </li>
                <?php if ($user[0]->Estado == '0'): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?echo site_url() ?>/EXIT"><i class="fas fa-power-off"></i></a>
                </li>
                <? endif ?>
            </ul>
        </div>
    </nav>