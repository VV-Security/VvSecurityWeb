<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Login VyV">
    <meta name="author" content="José Valdebenito">
    <link rel="icon" href="<?php echo base_url() ?>assets/img/logo.png">
    <title>Inicio de Sesion VyV Security</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href=https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900 rel="stylesheet">
    <script src=https://cdn.jsdelivr.net/npm/sweetalert2@11></script>
    <script src=https://unpkg.com/vue@next></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <style>
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

    body {
        background-color: #f5f5f5;
        background-image: url("<?php echo base_url() ?>assets/img/Backgraund-login.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }

    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
    }

    .form-signin .checkbox {
        font-weight: 400;
    }

    .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
    }

    .form-signin .form-control:focus {
        z-index: 2;
    }

    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .middle {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
    }

    .col:hover img {
        opacity: 0.3;
    }

    .col:hover .middle {
        opacity: 1;
    }
    </style>
</head>

<body>

    <div id="login" class="container text-center mt-5">
        <div class="row justify-content-md-center">
            <div class="col-md-4 rounded" style="background: rgb(0,0,0,0.5);">
                <form class="form-signin">
                    <img class="mb-4" src="<?php echo base_url() ?>assets/img/Logo.png" alt="" width="200">
                    <h1 class="h3 mb-3 font-weight-normal text-white"> Iniciar Sesión</h1>
                    <label for="inputEmail" class="sr-only">Usuario</label>
                    <input type="email" v-model="rut" id="inputEmail" class="form-control my-2"
                        placeholder="Rut Usuario" required="" autofocus="">
                    <label for="inputPassword" class="sr-only">Contraseña</label>
                    <input type="password" v-model="clave" id="inputPassword" class="form-control"
                        placeholder="Contraseña" required="">
                    <br>
                    <button class="btn btn-lg btn-primary btn-block text-white" onclick="ej()" type="submit">Iniciar
                        sesión</button>
                </form>
            </div>
            <pre>
                {{$data}}
            </pre>
        </div>
    </div>

    <div class="fixed-bottom">
        <div class="container-fluid rounded-top py-3" style="background: rgb(255,255,255,0.5);">
            <div class="row">
                <div class="col">
                    <img src="<?php echo base_url() ?>assets/img/WebMail.png" alt="" class="img-fluid">
                    <div class="middle"><a href=https://www.vvsecurity.cl:2096/ class="btn btn-Primary">Ir a WebMail</a>
                    </div>
                </div>
                <div class="col">
                    <img src="<?php echo base_url() ?>assets/img/Tecnologia.png" alt="" class="img-fluid">
                    <div class="middle"><a href=http://vvsecurity.duckdns.org/class="btn btn-Primary">Ir a SoftGuard</a>
                    </div>
                </div>
                <div class="col">
                    <img src="<?php echo base_url() ?>assets/img/Laudus.png" alt="" class="img-fluid">
                    <div class="middle"><a href=https://erp.laudus.cl/PortalEmpleados/class="btn btn-Primary">Ir a
                            Laudus</a></div>
                </div>
                <div class="col">
                    <img src="<?php echo base_url() ?>assets/img/ControlRoll.png" alt="" class="img-fluid">
                    <div class="middle"><a href=https://www.controlroll.com/login.aspxclass="btn btn-Primary">Ir a
                            Control Roll</a></div>
                </div>
                <div class="col">
                    <img src="<?php echo base_url() ?>assets/img/WebMaster.png" alt="" class="img-fluid">
                    <div class="middle"><a href=https://www.vvsecurity.cl/wp-login.phpclass="btn btn-Primary">Ir a Web
                            Master</a></div>
                </div>
            </div>
        </div>
</body>

<script>
function ej() {

    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: 'success',
        title: 'todo en orden'
    })
}
</script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/JsVueLogin.js"></script>

</html>