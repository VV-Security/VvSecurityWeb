<br>
<br>
<br>
<h1 class="h1 text-center my-5 text-white">Requerimientos</h1>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-5 shadow-lg   text-center rounded-lg mb-5 mx-5 border">
            <h2 class="h2 text-white mt-3 mb-5">Empezar un nuevo requerimiento</h2>

            <input type="text" class="form-control" id="inputPassword2" placeholder="Codigo de Control Roll">

            <button type="submit" class="btn btn-primary my-5" data-toggle="modal" data-target="#Iniciar">Iniciar requerimiento</button>
        </div>



        <div class="col-sm-5  shadow-lg text-center mx-5 rounded mb-5 border">
            <h2 class="h2 text-white mt-3 mb-5">hacer seguimiento de un requerimiento</h2>

            <input type="text" class="form-control" id="inputPassword2" placeholder="Codigo de Seguimiento">
            <button type="submit" class="btn btn-primary my-5" data-toggle="modal" data-target="#seguimiento">Seguimiento requerimiento</button>

        </div>
    </div>
</div>



<!-- Modal Nuevo requerimiento-->
<div class="modal fade" id="Iniciar" tabindex="-1" role="dialog" aria-labelledby="Iniciar" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Empezar un nuevo requerimiento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="conteiner fluid">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="h4">Nombre:</h4>
                            <h5 class="h5 mb-4">Rut:</h5>

                            <form action="">
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>sugerencia</option>
                                        <option>reclamo</option>
                                        <option>felicitacion</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Comentario:</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </div>
</div>



<!-- Modal seguimiento-->
<div class="modal fade" id="seguimiento" tabindex="-1" role="dialog" aria-labelledby="seguimiento" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Seguimiento de su requerimiento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            .......
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </div>
</div>