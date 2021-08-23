<br>
<br>
<br>
<br>
<br>
<h2 class="text-center h2 text-white my-5">Formulario de postulación de guardia de seguridad</h2>
<div class="container-fluid p-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <form>
                <!-- Name input -->
                <div class="form-outline mb-4">

                    <label class="form-label text-white">Nombres</label>
                    <input type="text" id="Nombres" class="form-control" />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label text-white" for="form4Example1">Apellidos</label>
                    <input type="text" id="Apellidos" class="form-control" />
                </div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label text-white" for="form4Example2">Dirección de correo electrónico</label>
                    <input type="email" id="Correo" class="form-control" />
                </div>

                <!-- Tel input -->
                <div class="form-outline mb-4">
                    <label class="form-label text-white" for="Tel">Teléfono</label>
                    <input type="tel" id="Tel" class="form-control" />
                </div>

                <!--COMUNA input -->
                <div class="form-outline mb-4">
                    <label class="form-label text-white" for="comuna">Comuna</label>
                    <input type="text" id="Comuna" class="form-control" />
                </div>
                <!-- OS10 -->
                <div class="form-outline mb-4">
                    <label class="form-label text-white" for="comuna">Estado de su O.S.10</label>
                    <div class="form-check">
                        <input class="form-check-input text-white" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                        <label class="form-check-label text-white" for="exampleRadios1">
                            Al día
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input text-white" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label text-white" for="exampleRadios2">
                            Vencido
                        </label>
                    </div>
                </div>
                <!-- Comentario input -->
                <div class="form-outline mb-4">
                    <label class="form-label text-white" for="form4Example3">Agrega un comentario</label>
                    <textarea class="form-control" id="Comentario" rows="4"></textarea>
                </div>
                <!-- cv input -->
                <div class="form-outline mb-3">
                    <label for="formFileLg" class="form-label text-whit e">Suba su CV(Opcional)</label>
                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                </div>
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
                    <label class="form-check-label text-white" for="form4Example4">
                        Enviame una copia de este mensaje
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

                        <p><i class="fas fa-envelope"></i> <strong id="CorreoCard"> Ejemplo@ejemplo.cl</strong></p>
                        <p><i class="fas fa-phone"></i>+56 <strong  id="TelCard">9 9999 9999</strong></p>
                        <p>Comuna: <strong id="ComunaCard"></strong></p>
                        <div class="border p-3 text-center">
                            <p class="border-bottom">OS10</p>
                            <div id="Check">

                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <h2 id="NombresCard" class="h3"></h2>
                        <h2 id="ApellidosCard" class="h3"></h2>
                        <p>Comentario:</p>
                        <p class="text-justify" id="ComentarioCard"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>