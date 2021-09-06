<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h2 class="h2 my-3">Usuarios</h2>
        </div>
        <div class="col-6 text-right">
            <button type="button" class="btn btn-success " data-toggle="modal" data-target="#Agregar">
                <i class="fas fa-user-plus"></i>
            </button>
        </div>


        <!-- Modal Agregar-->
        <div class="modal fade" id="Agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation">
                            <div class="mb-3">
                                <label class="form-label">Rut</label>
                                <input v-model="Rut" type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Primer Nombre</label>
                                <input v-model="Primero" type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Segundo Nombre</label>
                                <input v-model="Segundo" type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Apellido Paterno</label>
                                <input v-model="Paterno" type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Apellido Materno</label>
                                <input v-model="Materno" type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input v-model="Email" type="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Clave</label>
                                <input v-model="Clave" type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirmar Clave</label>
                                <input v-model="Clave2" type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Perfil</label>
                                </div>
                                <select v-model="Tipo" class="custom-select" id="inputGroupSelect01">
                                    <option value="-1">Seleccionar Per...</option>
                                    <option value="0">Admin</option>
                                    <option value="1">Basico</option>
                                    <option value="2">Intermedio</option>
                                    <option value="3">Avanzado</option>
                                    <option value="4">Inactivo</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <select v-model="Departamento_Id" class="custom-select">
                                    <option value="-1">Seleccionar Depart...</option>
                                    <option v-for="d in Departamentos" v-bind:value="d.Id">{{d.nombre}}</option>
                                </select>
                                <div class="input-group-append">
                                    <label class="input-group-text" for="inputGroupSelect02">Departamento</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" @click="Insertar()" data-dismiss="modal"
                            class="btn btn-primary">Guardar</button>
                    </div>
                    <pre>
                        {{$data}}
                    </pre>
                </div>
            </div>
        </div>


        <div class="col-md-12" id="datos">
            <table id="" class="table table-dark table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Rut</th>
                        <th>Primer Nombre</th>
                        <th>Segundo Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Mail</th>
                        <th>Departamento</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>

                    <tr v-for="U in Usuarios">
                        <td>{{U.Id_User}}</td>
                        <td>{{U.Rut}}</td>
                        <td>{{U.Primero}}</td>
                        <td>{{U.Segundo}}</td>
                        <td>{{U.Paterno}}</td>
                        <td>{{U.Materno}}</td>
                        <td>{{U.Mail}}</td>
                        <td>{{U.departamento}}</td>
                        <td>
                            <button @click="DatosModal(U)" data-toggle="modal" data-target="#Modificar" type="button"
                                class="btn btn-info"><i class="fas fa-edit"></i></button>
                        </td>
                        <td>
                            <button @click="eliminar(U)" type="button" class="btn btn-danger"><i
                                    class="fas fa-trash-alt text-white"></i></button>
                        </td>
                    </tr>

                </tbody>
            </table>
            <pre>
                {{$data}}
                </pre>


            <!-- Modal Modificar-->
            <div class="modal fade" id="Modificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Rut</label>
                                    <input v-model="InfoModal.Rut" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Primer Nombre</label>
                                    <input v-model="InfoModal.Primero" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Segundo Nombre</label>
                                    <input v-model="InfoModal.Segundo" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Primer Apellido</label>
                                    <input v-model="InfoModal.Paterno" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Segundo Apellido</label>
                                    <input v-model="InfoModal.Materno" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input v-model="InfoModal.Mail" type="email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Clave</label>
                                    <input v-model="InfoModal.Clave" type="password" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Departamento</label>
                                    <input v-model="InfoModal.Departamento_Id" type="number" class="form-control">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" @click="Modificar()" data-dismiss="modal"
                                class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </div>

            </div>

        </div>


    </div>
</div>

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/JsVueBuscarUsuario.js"></script>