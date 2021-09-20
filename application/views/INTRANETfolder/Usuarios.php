<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/materialize.min.css"
    media="screen,projection" />
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h2 class="h2 my-3">Usuarios</h2>
        </div>
        <div class="col-6 text-right">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Agregar">
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
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Rut</label>
                                <input @keyup="rut()" v-model="Rut" type="text" class="form-control">
                                <div class="text-danger">{{ValidacionRut}}</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Primer Nombre</label>
                                <input @keyup="primero()" v-model="Primero" type="text" class="form-control">
                                <div class="text-danger">{{ValidacionPrimero}}</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Segundo Nombre</label>
                                <input @keyup="segundo()" v-model="Segundo" type="text" class="form-control">
                                <div class="text-danger">{{ValidacionSegundo}}</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Apellido Paterno</label>
                                <input @keyup="paterno()" v-model="Paterno" type="text" class="form-control">
                                <div class="text-danger">{{ValidacionPaterno}}</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Apellido Materno</label>
                                <input @keyup="materno()" v-model="Materno" type="text" class="form-control">
                                <div class="text-danger">{{ValidacionMaterno}}</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input v-model="Email" @keyup="mail()" type="email" class="form-control">
                                <div class="text-danger">{{ValidacionMail}}</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Clave</label>
                                <input @keyup="clave()" v-model="Clave" type="password" class="form-control">
                                <div class="text-danger"> {{ValidacionClave}}</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirmar Clave</label>
                                <input @keyup="clave2()" v-model="Clave2" type="password" class="form-control">
                                <div class="text-danger">{{ValidacionClave2}}</div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Perfil</label>
                                </div>
                                <select @change="tipo" v-model="Tipo" class="custom-select" id="inputGroupSelect01">
                                    <option value="-1">Seleccionar Per...</option>
                                    <option value="0">Admin</option>
                                    <option value="1">Basico</option>
                                    <option value="2">Intermedio</option>
                                    <option value="3">Avanzado</option>
                                    <option value="4">Inactivo</option>
                                </select>
                            </div>
                            <div class="text-danger">{{ValidacionTipo}}</div>
                            <br>
                            <div class="input-group mb-3">
                                <select @change="departamento" v-model="Departamento_Id" class="custom-select">
                                    <option value="-1">Seleccionar Depart...</option>
                                    <option v-for="d in Departamentos" v-bind:value="d.Id">{{d.nombre}}</option>
                                </select>
                                <div class="input-group-append">
                                    <label class="input-group-text" for="inputGroupSelect02">Departamento</label>
                                </div>
                            </div>
                            <div class="text-danger">{{ValidacionDepartamentos}}</div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" @click="Insertar()" class="btn btn-primary">Guardar</button>
                    </div>
                    <pre>
                        {{$data}}
                    </pre>
                </div>
            </div>
        </div>

        <div class="col-md-12" id="datos">
            <table class="table table-dark table-striped" style="width:100%">
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
                <tbody v-if="Usuarios.length <= 0">
                    <td></td>
                    <td>No</td>
                    <td></td>
                    <td>Hay</td>
                    <td></td>
                    <td>Datos</td>
                    <td></td>
                    <td></td>
                </tbody>
                <tbody v-else>
                    <tr v-for="U in Usuarios">
                        <td>{{U.Id}}</td>
                        <td>{{U.Rut}}</td>
                        <td>{{U.Primero}}</td>
                        <td>{{U.Segundo}}</td>
                        <td>{{U.Paterno}}</td>
                        <td>{{U.Materno}}</td>
                        <td>{{U.Mail}}</td>
                        <td>{{U.departamento}}</td>
                        <td>
                            <button @click="DatosModal()" data-toggle="modal" data-target="#Modificar" type="button"
                                class="btn btn-info">
                                <i class="fas fa-edit"></i>
                            </button>
                        </td>
                        <td>
                            <button @click="eliminar(U)" type="button" class="btn btn-danger">
                                <i class="fas fa-trash-alt text-white"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- Tabla con datos-->

            <table class="highlight  blue-grey darken-3 white-text">
                <thead>
                    <tr>
                        <th>Rut</th>
                        <th>Nombre</th>
                        <th>2do Nombre</th>
                        <th>Ap. Paterno</th>
                        <th>Ap. Materno</th>
                        <th>Mail</th>
                        <th>Departamento</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Alvin</td>
                        <td>Eclair</td>
                        <td>$0.87</td>
                        <td>$0.87</td>
                        <td>$0.87</td>
                        <td>$0.87</td>
                        <td>$0.87</td>
                        <td>$0.87</td>
                        <td>$0.87</td>
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
                                    <input v-model="InfoModal.Clave2" type="password" class="form-control">
                                </div>
                                <div class="input-group mb-3">
                                    <select @change="departamento" v-model="Departamento_Id" class="custom-select">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?= base_url() ?>assets/js/materialize.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/JsVueBuscarUsuario.js"></script>