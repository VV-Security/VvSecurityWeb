<br>
<br>
<br>
<br>
<br>
<h2 class="text-center h2 text-white my-5">Formulario</h2>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-6">
            <form>
                <!-- Name input -->
                <div class="form-outline mb-4">
                    <input type="text" id="Nombres" class="form-control" />
                    <label class="form-label text-white" for="form4Example1">Nombres</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="text" id="Apellidos" class="form-control" />
                    <label class="form-label text-white" for="form4Example1">Apellidos</label>
                </div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="form4Example2" class="form-control" />
                    <label class="form-label text-white" id="Correo" for="form4Example2">Dirección de correo electrónico</label>
                </div>

                <!-- Tel input -->
                <div class="form-outline mb-4">
                    <input type="text" id="Tel" class="form-control" />
                    <label class="form-label text-white" id="Tel" for="Tel">teléfono</label>
                </div>

                <!-- Name COMUNA -->
                <div class="form-outline mb-4">
                    <input type="text" id="comuna" class="form-control" />
                    <label class="form-label text-white" for="comuna">Comuna</label>
                </div>

                <!-- Message input -->
                <div class="form-outline mb-4">
                    <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                    <label class="form-label text-white" for="form4Example3">Agrega un comentario</label>
                </div>

                <!-- cv input -->
                <div class="form-outline mb-3">
                    <label for="formFileLg" class="form-label">Large file input example</label>
                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                </div>
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
                    <label class="form-check-label text-white" for="form4Example4">
                        Send me a copy of this message
                    </label>
                </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">ENVIAR</button>
            </form>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body row">
                    <div class="col-4">
                        <img src="<?php echo base_url() ?>assets/img/Logo VvSecurity_Color_cuadrado.png" alt="" class="img-fluid">
                        <div class="media">
                        <i class="fas fa-envelope"></i>
                            <div class="media-body">
                               <p id="CorreoCard">Ejemplo@ejemplo.cl</p>
                            </div>
                        </div>
                        <div class="media">
                        <i class="fas fa-phone"></i>+56
                            <div class="media-body">
                               <p id="TelCard">9 9999 9999</p>
                            </div>
                        </div>
                            <p>Comuna:</p>
                            <p id="comuna"></p>
                    </div>
                    <div class="col-8">
                        <h2 id="NombresCard" class="h2">----------------</h2>
                        <h2 id="ApellidosCard" class="h2">----------------</h2>
                        <h2 id="Cometario">---------</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

</script>