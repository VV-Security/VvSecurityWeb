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

    #################--->          contacto Crud tabla             <---#################

    #################--->       persona_natural Crud tabla         <---#################

    #################--->         referencia Crud tabla            <---#################
 
    #################--->         tipo_servicio Crud tabla         <---#################

    #################--->      representante_legal Crud tabla      <---#################

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