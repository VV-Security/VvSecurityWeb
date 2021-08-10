<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model("Crud_User");
        $this->load->model("Crud_Departaments");
        $this->load->model("Crud_MatrizServicio");
        $this->load->model("Crud_Empresa");
        $this->load->model("Crud_Cargos");
        $this->load->model("Crud_PersonaNatural");
        $this->load->model("Crud_RepresentanteLegal");
    }

    #################--->          departamento Crud tabla         <---#################

    public function VerDepartamentos()
    {
        echo json_encode($this->Crud_Departaments->SelectDepartamento());
    }
    public function CrearDepartamentos()
    {
        $Nombre = $this->input->post("Nombre");

        if (isset($Nombre)) {
        
            /*Nombre Crud Función->*/ $this->Crud_Departaments->InsertDepartamento($Nombre);

            echo json_encode(array("msg" => "Departamento Creado"));
        } else {
            echo json_encode(array("msg"=> "No Creado el Departamento"));
        }
    }
    public function ActualizarDepartamentos()
    {
        $Id = $this->input->post("Id");
        $Nombre = $this->input->post("Nombre");
        if (isset($Id) || isset($Nombre)) {
            /*Nombre Crud Función->*/ $this->Crud_Departaments->UpdateDepartamento($Id, $Nombre);
            echo json_encode(array("msg" => "Departamento Actualizado!!"));
        } else {
            echo json_encode(array("msg" => "No se Actualizo Departamento!!"));
        }
    }
    public function EliminarDepartamentos()
    {
        $Id = $this->input->post("Id");

        if (isset($Id)) {
            /*Nombre Crud Función->*/ $this->Crud_Departaments->DeleteDepartamento($Id);
            echo json_encode(array("msg" => "Departamento Eliminado!!"));
        } else {
            echo json_encode(array("msg" => "No se Pudo Eliminar el Departamento!!"));
        }
    }

    #################--->           usuarios Crud tabla            <---#################

    public function VerUsuario()
    {
        echo json_encode($this->Crud_User->SelectUsuarios());
    }
    public function CrearUsuario()
    {
        $Rut = $this->input->post("rut");
        $Primero = $this->input->post("primero");
        $Segundo = $this->input->post("segundo");
        $Paterno = $this->input->post("paterno");
        $Materno = $this->input->post("materno");
        $Clave = $this->input->post("clave");
        $Mail = $this->input->post("mail");
        $Estado = $this->input->post("estado");
        $Departamento_Id = $this->input->post("depto_id");

        if (isset($Rut) || isset($Primero) || isset($Segundo) || isset($Paterno)
        || isset($Materno) || isset($Clave) || isset($Mail) || isset($Estado) || isset($Departamento_Id)) {
          
        /*Nombre Crud Función->*/$this->Crud_User->InsertUsuario($Rut, $Primero, $Segundo, $Paterno, $Materno, $Clave, $Mail, $Estado, $Departamento_Id);
            
            echo json_encode(array("msg" => "Nuevo Usuario Agregado con Éxito"));
        } else {
            echo json_encode(array("msg" => "No se Pudo Crear Usuario"));
        }
    }
    public function ActualizarUsuario()
    {
        $Id = $this->input->post("id");
        $Rut = $this->input->post("rut");
        $Primero = $this->input->post("primero");
        $Segundo = $this->input->post("segundo");
        $Paterno = $this->input->post("paterno");
        $Materno = $this->input->post("materno");
        $Clave = $this->input->post("clave");
        $Mail = $this->input->post("mail");
        $Estado = $this->input->post("estado");
        $Departamento_Id = $this->input->post("depto_id");

        if (isset($Id) || isset($Rut) || isset($Primero) || isset($Segundo) || isset($Paterno)
        || isset($Materno) || isset($Clave) || isset($Mail) || isset($Estado) || isset($Departamento_Id)) {
            /*Nombre Crud Función->*/$this->Crud_User->UpdateUsuario($Id, $Rut, $Primero, $Segundo, $Paterno, $Materno, $Clave, $Mail, $Estado, $Departamento_Id);
            
            echo json_encode(array("msg" => "Usuario Actualizado!!"));
        } else {
            echo json_encode(array("msg" => "No se pude Actualizar!!"));
        }
    }
    public function EliminarUsuario()
    {
        $Id = $this->input->post("id");
        
        if (isset($Id)) {
            /*Nombre Crud Función->*/$this->Crud_User->DeleteUsuario($Id);
            echo json_encode(array("msg"=> "Eliminación de Usuario Completa"));
        } else {
            echo json_encode(array("msg"=> "Usuario no Eliminado"));
        }
    }

    #################--->          cargos Crud tabla               <---#################

    public function VerCargos()
    {
        echo json_encode($this->Crud_Cargos->SelectCargos());
    }
    public function CrearCargos()
    {
        $Nombre = $this->input->post("nombre");
        if (isset($Nombre)) {
            $this->Crud_Cargos->InsertCargos($Nombre);
            echo json_encode(array("msg" => "Cargos Creados"));
        } else {
            echo json_encode(array("msg" => "No crea Cargos"));
        }
    }
    public function ActualizarCargos()
    {
        $Id = $this->input->post("id");
        $Nombre = $this->input->post("nombre");
        if (isset($Id) || $Nombre) {
            $this->Crud_Cargos->UpdateCargos($Id, $Nombre);
            echo json_encode(array("msg"=> "Actualizado el Cargo"));
        } else {
            echo json_encode(array("msg"=> "No se Actualizo Cargo"));
        }
    }
    public function EliminarCargos()
    {
        $Id = $this->input->post('id');
        if (isset($Id)) {
            $this->Crud_Cargos->DeleteCargos($Id);
            echo json_encode(array("msg"=> "Cargo Eliminado"));
        } else {
            echo json_encode(array("msg"=> "No Eliminado el Cargo"));
        }
    }
    

    #################--->          contacto Crud tabla             <---#################

    #################--->       persona_natural Crud tabla         <---#################
    
    public function VerPersonaNatural()
    {
        echo json_encode($this->Crud_PersonaNatural->SelectPersonaN());
    }
    public function CrearPersonaNatural()
    {
        $Rut = $this->input->post('rut');
        $Primer= $this->input->post('primer');
        $Segundo =  $this->input->post('segundo');
        $Paterno = $this->input->post('paterno');
        $Materno = $this->input->post('materno');
        $Fono = $this->input->post('fono');
        $Direccion = $this->input->post('direccion');
        $Numero = $this->input->post('numero');
        $Comuna = $this->input->post('comuna');
        $Ciudad = $this->input->post('name');
        $Mail = $this->input->post('mail');
        
        if (isset($Rut) || isset($Primer) || isset($Segundo) || isset($Paterno) || isset($Materno) ||
        isset($Fono) || isset($Direccion) || isset($Numero) || isset($Comuna) || isset($Ciudad) || isset($Mail)) {
            $this->Crud_PersonaNatural->InsertPersonalN(
                $Rut,
                $Primer,
                $Segundo,
                $Paterno,
                $Materno,
                $Fono,
                $Direccion,
                $Numero,
                $Comuna,
                $Ciudad,
                $Mail
            );
            echo json_encode(array("msg" => "Personal Natural Creada"));
        } else {
            echo json_encode(array("msg" => "No Creada la Persona Natural"));
        }
    }
    public function ActualizarPersonaNatural()
    {
        $Id = $this->input->post('id');
        $Rut = $this->input->post('rut');
        $Primer= $this->input->post('primer');
        $Segundo =  $this->input->post('segundo');
        $Paterno = $this->input->post('paterno');
        $Materno = $this->input->post('materno');
        $Fono = $this->input->post('fono');
        $Direccion = $this->input->post('direccion');
        $Numero = $this->input->post('numero');
        $Comuna = $this->input->post('comuna');
        $Ciudad = $this->input->post('name');
        $Mail = $this->input->post('mail');

        if (isset($Id) ||isset($Rut) || isset($Primer) || isset($Segundo) || isset($Paterno) || isset($Materno) ||
        isset($Fono) || isset($Direccion) || isset($Numero) || isset($Comuna) || isset($Ciudad) || isset($Mail)) {
            $this->Crud_PersonaNatural->UpdatePersonalN(
                $Id,
                $Rut,
                $Primer,
                $Segundo,
                $Paterno,
                $Materno,
                $Fono,
                $Direccion,
                $Numero,
                $Comuna,
                $Ciudad,
                $Mail
            );
            echo json_encode(array("msg" => "Actualizado la Persona Natural"));
        } else {
            echo json_encode(array("msg" => "No se actualizo Personal Natural"));
        }
    }
    public function EliminarPersonaNatural()
    {
        $Id = $this->input->post('id');
        if (isset($Id)) {
            $this->crud_PersonaNatural->DeletePersonaN($Id);
            echo json_encode(array("msg" => "Persona Natural Eliminada"));
        } else {
            echo json_encode(array("msg" => "No Eliminada la Persona Natural"));
        }
    }


    #################--->         referencia Crud tabla            <---#################
 
    #################--->         tipo_servicio Crud tabla         <---#################

    #################--->      representante_legal Crud tabla      <---#################

    public function VerRepresentante()
    {
        echo json_encode($this->Crud_RepresentanteLegal->SelectRepresentante());
    }
    public function CrearRepresentante()
    {
        $Rut = $this->input->post('rut');
        $Primero = $this->input->post('primero');
        $Segundo = $this->input->post('segundo');
        $Paterno = $this->input->post('paterno');
        $Materno = $this->input->post('materno');
        $Fono = $this->input->post('fono');
        $Mail = $this->input->post('mail');

        if (isset($Rut) || isset($Primero) || isset($Segundo) || isset($Paterno) ||
         isset($Materno) || isset($Fono) || isset($Mail)) {
            $this->Crud_RepresentanteLegal->SelectRepresentante();
            echo json_encode(array("msg" => "Representante Legal Creado"));
        } else {
            echo json_encode(array("msg" => "No Creado Representante Legal"));
        }
    }
    public function ActualizarRepresentante()
    {
        $Id = $this->input->post('id');
        $Rut = $this->input->post('rut');
        $Primero = $this->input->post('primero');
        $Segundo = $this->input->post('segundo');
        $Paterno = $this->input->post('paterno');
        $Materno = $this->input->post('materno');
        $Fono = $this->input->post('fono');
        $Mail = $this->input->post('mail');

        if (isset($Id) || isset($Rut) || isset($Primero) || isset($Segundo) || isset($Paterno) ||
         isset($Materno) || isset($Fono) || isset($Mail)) {
            $this->Crud_RepresentanteLegal->UpdateRepresentante($Id, $Rut, $Primero, $Segundo, $Paterno, $Materno, $Fono, $Mail);
            
            echo json_encode(array("msg" => "Representante Legal Actualizado"));
        } else {
            echo json_encode(array("msg" => "No Actualiza Representante Legal"));
        }
    }
    public function EliminarRepresentante()
    {
        $Id = $this->input->post('id');
        if (isset($Id)) {
            $this->Crud_RepresentanteLegal->DeleteRepresentante($Id);
            echo json_encode(array("msg" => "Eliminado Representante Legal"));
        } else {
            echo json_encode(array("msg" => "No Eliminado el Representante Legal"));
        }
    }


    

    #################--->          empresa Crud tabla              <---#################

    public function VerEmpresa()
    {
        echo json_encode($this->Crud_Empresa->SelectEmpresa());
    }
    public function CrearEmpresa()
    {
        $Rut = $this->input->post('rut');
        $RazonSocial = $this->input->post('razonSocial');
        $GiroComercial = $this->input->post('giroComercial');
        $Fono = $this->input->post('fono');
        $Direccion = $this->input->post('direccion');
        $Numero = $this->input->post('numero');
        $Comuna = $this->input->post('comuna');
        $Ciudad = $this->input->post('ciudad');
        $RespresentanteId  = $this->input->post('representanteId');

        if ($Rut || $RazonSocial || $GiroComercial || $Fono || $Direccion || $Numero
        || $Comuna || $Ciudad || $RespresentanteId) {
            
            /*Nombre Crud Función->*/$this->Crud_User->InsertEmpresa(
                $Rut,
                $RazonSocial,
                $GiroComercial,
                $Fono,
                $Direccion,
                $Numero,
                $Comuna,
                $Ciudad,
                $RespresentanteId
            );

            echo json_encode(array("msg"=> "Empresa agregada"));
        } else {
            echo json_encode(array("msg"=> "NO agrego Empresa"));
        }
    }
    public function ActualizarEmpresa()
    {
        $Id = $this->input->post("id");
        $Rut = $this->input->post('rut');
        $RazonSocial = $this->input->post('razonSocial');
        $GiroComercial = $this->input->post('giroComercial');
        $Fono = $this->input->post('fono');
        $Direccion = $this->input->post('direccion');
        $Numero = $this->input->post('numero');
        $Comuna = $this->input->post('comuna');
        $Ciudad = $this->input->post('ciudad');
        $RespresentanteId  = $this->input->post('representanteId');

        if ($Id || $Rut || $RazonSocial || $GiroComercial || $Fono || $Direccion || $Numero
        || $Comuna || $Ciudad || $RespresentanteId) {
            
            /*Nombre Crud Función->*/$this->Crud_User->UpdateEmpresa(
                $Id,
                $Rut,
                $RazonSocial,
                $GiroComercial,
                $Fono,
                $Direccion,
                $Numero,
                $Comuna,
                $Ciudad,
                $RespresentanteId
            );

            echo json_encode(array("msg"=> "Empresa Actualizada"));
        } else {
            echo json_encode(array("msg"=> "Actualizacion Empresa Rechazada"));
        }
    }
    public function EliminarEmpresa()
    {
        $Id = $this->input->post("id");
        if (isset($Id)) {
            /*Nombre Crud Función->*/$this->Crud_User->DeleteEmpresa($Id);
            echo json_encode(array("msg"=> "Empresa Eliminada"));
        } else {
            echo json_encode(array("msg"=> "Eliminación Empresa Rechazada"));
        }
    }

    #################--->        tipo_servicio Crud tabla          <---#################
    
    #################--->        referencia Crud tabla             <---#################

    #################--->        matriz_servicio Crud tabla        <---#################

    public function VerMatrizServicio()
    {
        echo json_encode($this->Crud_MatrizServicio->SelectMatrizServicio());
    }
    public function CrearMatrizServicio()
    {
        $Ubicacion = $this->input->post("ubicacion");
        $Duracion = $this->input->post("duracion");
        $Referencia_Ubi  = $this->input->post("referencia_ubi");
        $Jornada  = $this->input->post("jornada");
        $Turno  = $this->input->post("turno");
        $HorarioLaboral  = $this->input->post("horarioLaboral");
        $Observaciones  = $this->input->post("observaciones");
        $TipoServicio_Id  = $this->input->post("tipoServicio_id");
        $ServiciosBasicos_Id  = $this->input->post("serviciosBasicos_id");
        $Extras_Id  = $this->input->post("extras_id");
        $Referencia_Id  = $this->input->post("referencia_id");

        if (isset($Ubicacion) || isset($Duracion) || isset($Referencia_Ubi) || isset($Jornada)
        || isset($Turno) || isset($HorarioLaboral) || isset($Observaciones) || isset($TipoServicio_Id)
        || isset($ServiciosBasicos_Id) || isset($Extras_Id) || isset($Referencia_Id)) {
             
            /*Nombre Crud Función->*/ $this->Crud_MatrizServicio->InsertMatrizServicio(
                $Ubicacion,
                $Duracion,
                $Referencia_Ubi,
                $Jornada,
                $Turno,
                $HorarioLaboral,
                $Observaciones,
                $TipoServicio_Id,
                $ServiciosBasicos_Id,
            );

            echo json_encode(array("msg"=> "Matriz de Servicio Creada con exito!!"));
        } else {
            echo json_encode(array("msg"=> "No se creo Matriz de Servicio!!"));
        }
    }
    public function ActualizarMatrizServicio()
    {
        $Id = $this->input->post("id");
        $Ubicacion = $this->input->post("ubicacion");
        $Duracion = $this->input->post("duracion");
        $Referencia_Ubi  = $this->input->post("referencia_ubi");
        $Jornada  = $this->input->post("jornada");
        $Turno = $this->input->post("turno");
        $HorarioLaboral  = $this->input->post("horarioLaboral");
        $Observaciones  = $this->input->post("observaciones");
        $TipoServicio_Id  = $this->input->post("tipoServicio_id");
        $ServiciosBasicos_Id  = $this->input->post("serviciosBasicos_id");
        $Extras_Id  = $this->input->post("extras_id");
        $Referencia_Id  = $this->input->post("referencia_id");

        if (isset($Id) || isset($Ubicacion) || isset($Duracion) || isset($Referencia_Ubi) || isset($Jornada)
        || isset($Turno) || isset($HorarioLaboral) || isset($Observaciones) || isset($TipoServicio_Id)
        || isset($ServiciosBasicos_Id) || isset($Extras_Id) || isset($Referencia_Id)) {
             
            /*Nombre Crud Función->*/ $this->Crud_MatrizServicio->UpdateMatrizServicio(
                $Id,
                $Ubicacion,
                $Duracion,
                $Referencia_Ubi,
                $Jornada,
                $Turno,
                $HorarioLaboral,
                $Observaciones,
                $TipoServicio_Id,
                $ServiciosBasicos_Id,
            );

            echo json_encode(array("msg"=> "Actualizada la Matriz de Servicio!!"));
        } else {
            echo json_encode(array("msg"=> "Actualización Matriz de Servicio No Realizada!!"));
        }
    }
    public function EliminarMatrizServicio()
    {
        $Id = $this->input->post("id");
        if (isset($Id)) {
            
       /*Nombre Crud Función->*/$this->Crud_MatrizServicio->DeleteMatrizServicio($Id);

            echo json_encode(array("msg" => "Matriz de Servicio Eliminada"));
        } else {
            echo json_encode(array("msg" => "Elimina no realizada. Matriz Servicio"));
        }
    }


    #################--->        matriz_cotizante Crud tabla       <---#################

    #################--->        empresas_ctrlroll Crud tabla      <---#################

    #################--->        requerimiento Crud tabla          <---#################

    #################--->        estados Crud tabla                <---#################

    #################--->     matriz_requerimientos Crud tabla     <---#################

    #################--->         noticias Crud tabla              <---#################
    
    #################--->         categorías Crud tabla            <---#################
}