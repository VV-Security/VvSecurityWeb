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
        $this->load->model("Crud_ServiciosBasicos");
        $this->load->model('Crud_Contacto');
        $this->load->model('Crud_Referencia');
        $this->load->model('Crud_EmpresasCtrlRoll');
        $this->load->model('Crud_Extras');
        $this->load->model('Crud_Laboral');
        $this->load->model('Crud_MatrizCotizante');
        $this->load->model('Crud_TipoServicio');
        $this->load->model('Crud_MatrizRequerimientos');
        $this->load->model('Crud_Requerimientos');
        // $this->load->model('Crud_Estados');
    }
 
    
    #################--->        estados Crud tabla                <---#################
    
    #################--->        requerimiento Crud tabla          <---#################
    public function VerRequerimiento()
    {
        echo json_encode($this->Crud_Requerimientos->SelectRequerimientos());
    }
    public function CrearRequerimiento()
    {
        // $Id
        $Nombre = $this->input->post('nombre');
        $Observacion = $this->input->post('observaciones');
        $Fecha_Ing = $this->input->post('ingreso');
        $Fecha_Fin = $this->input->post('fin');
        $Respuesta = $this->input->post('repuesta');
        if (isset($Nombre) || isset($Observacion) || isset($Fecha_Ing) || isset($Fecha_Fin) || isset($Respuesta)) {
            $this->Crud_Requerimientos->InsertRequerimientos($Nombre, $Observacion, $Fecha_Ing, $Fecha_Fin, $Respuesta);
            echo json_encode(array('msg' =>'Requerimiento Creado'));
        } else {
            echo json_encode(array('msg' =>' No Crea Requerimiento'));
        }
    }
    
    public function ActualizarRequerimiento()
    {
        $Id = $this->input->post('id');
        $Nombre = $this->input->post('nombre');
        $Observacion = $this->input->post('observaciones');
        $Fecha_Ing = $this->input->post('ingreso');
        $Fecha_Fin = $this->input->post('fin');
        $Respuesta = $this->input->post('repuesta');
        if (isset($Nombre) || isset($Observacion) || isset($Fecha_Ing) || isset($Fecha_Fin) || isset($Respuesta)) {
            $this->Crud_Requerimientos->UpdateRequerimientos($Nombre, $Observacion, $Fecha_Ing, $Fecha_Fin, $Respuesta);
            echo json_encode(array('msg' =>'Actualiza Requerimiento'));
        } else {
            echo json_encode(array('msg' =>' No Actualiza Requerimiento'));
        }
    }
    public function EliminarRequerimiento()
    {
        $Id = $this->input->post('id');
        if (isset($Id)) {
            $this->Crud_Requerimientos->DeleteRequerimiento($Id);
            echo json_encode(array('msg' =>'Eliminamos Requerimiento'));
        } else {
            echo json_encode(array('msg' =>'No Eliminamos Requerimiento'));
        }
    }
    
    #################--->     matriz_requerimientos Crud tabla     <---#################
    public function VerMR()
    {
        echo json_encode($this->Crud_MatrizRequerimientos->SelectMR());
    }
    public function CrearMR()
    {
        // $Id,
        $EmpresasCtrl = $this->input->post('empresactrl');
        $Requerimientos_Id = $this->input->post('requerimiento_id');
        $Estado_Id = $this->input->post('estado_id');
        if (isset($EmpresasCtrl) || isset($Requerimientos_Id) || isset($Estado_Id)) {
            $this->Crud_MatrizRequerimientos->InsertMR($EmpresasCtrl, $Requerimientos_Id, $Estado_Id);
            echo json_encode(array('msg' =>'Matriz de Requerimiento Creada'));
        } else {
            echo json_encode(array('msg' =>'No Crea Matriz de Requerimiento'));
        }
    }
    
    public function ActualizarMR()
    {
        $Id = $this->input->post('id');
        $EmpresasCtrl = $this->input->post('empresactrl');
        $Requerimientos_Id = $this->input->post('requerimiento_id');
        $Estado_Id = $this->input->post('estado_id');
        if (isset($Id) || isset($EmpresasCtrl) || isset($Requerimientos_Id) || isset($Estado_Id)) {
            $this->Crud_MatrizRequerimientos->UpdateMR($Id, $EmpresasCtrl, $Requerimientos_Id, $Estado_Id);
            echo json_encode(array('msg' =>'Actualiza Matriz de Requerimiento'));
        } else {
            echo json_encode(array('msg' =>'No Actualiza Matriz de Requerimiento'));
        }
    }
    public function EliminarMR()
    {
        $Id = $this->input->post('id');
        if (isset($Id)) {
            $this->Crud_MatrizRequerimientos->DeleteMR($Id);
            echo json_encode(array('msg' => 'Matriz de requerimiento Eliminada'));
        } else {
            echo json_encode(array('msg' => 'No Elimina Matriz de requerimiento'));
        }
    }

    #################--->        tipo_servicio Crud tabla          <---#################
    public function VerTS()
    {
        echo json_encode($this->Crud_TipoServicio->SelectTS());
    }
    public function CrearTS()
    {
        // $Id
        $Ggss = $this->input->post('ggss');
        $ServiAseoInd = $this->input->post('ServicioAseo');
        $Caseta = $this->input->post('caseta');
        $Otros = $this->input->post('otros');
        if (isset($Ggss) || isset($ServiAseoInd) || isset($Caseta) || isset($Otros)) {
            $this->Crud_TipoServicio->InsertTS($Ggss, $ServiAseoInd, $Caseta, $Otros);
            echo json_encode(array("msg"=>"Tipo de servicio Creado"));
        } else {
            echo json_encode(array("msg"=>"No Crea Tipo de servicio"));
        }
    }
    public function ActualizarTS()
    {
        $Id = $this->input->post('id');
        $Ggss = $this->input->post('ggss');
        $ServiAseoInd = $this->input->post('ServicioAseo');
        $Caseta = $this->input->post('caseta');
        $Otros = $this->input->post('otros');
        if (isset($Id) || isset($Ggss) || isset($ServiAseoInd) || isset($Caseta) || isset($Otros)) {
            $this->Crud_TipoServicio->UpdateTS($Id, $Ggss, $ServiAseoInd, $Caseta, $Otros);
            echo json_encode(array("msg"=>"Actualiza Tipo de servicio "));
        } else {
            echo json_encode(array("msg"=>"No Actualiza Tipo de servicio"));
        }
    }
    public function EliminarTS()
    {
        $Id = $this->input->post('id');
        if (isset($Id)) {
            $this->Crud_TipoServicio->DeleteTS($Id);
            echo json_encode(array("msg" => "Tipo Servicio Eliminado"));
        } else {
            echo json_encode(array("msg" => "No Elimina Tipo Servicio"));
        }
    }
    #################--->        matriz_cotizante Crud tabla       <---#################
    public function VerMC()
    {
        echo json_encode($this->Crud_MatrizCotizante->SelectMC());
    }
    public function CrearMC()
    {
        $Empresa_Id = $this->input->post('empresa_id');
        $Contacto_Id = $this->input->post('contacto_id');
        $Natural_Id = $this->input->post('natural_id');
        $Servicio_Id = $this->input->post('servicio_id');
        
        if (isset($Empresa_Id) || isset($Contacto_Id) || isset($Natural_Id) || isset($Servicio_Id)) {
            $this->Crud_MatrizCotizante->InsertMC($Empresa_Id, $Contacto_Id, $Natural_Id, $Servicio_Id);
            echo json_encode(array("msg" => "Creo Matriz Cotizante"));
        } else {
            echo json_encode(array("msg" => "No Crea Matriz Cotizante"));
        }
    }
    public function ActualizarMC()
    {
        $Id = $this->input->post('id');
        $Empresa_Id = $this->input->post('empresa_id');
        $Contacto_Id = $this->input->post('contacto_id');
        $Natural_Id = $this->input->post('natural_id');
        $Servicio_Id = $this->input->post('servicio_id');
        
        if (isset($Id) || isset($Empresa_Id) || isset($Contacto_Id) || isset($Natural_Id) || isset($Servicio_Id)) {
            $this->Crud_MatrizCotizante->UpdateMC($Id, $Empresa_Id, $Contacto_Id, $Natural_Id, $Servicio_Id);
            echo json_encode(array("msg" => "Actualizo Matriz Cotizante"));
        } else {
            echo json_encode(array("msg" => "No Actualiza Matriz Cotizante"));
        }
    }
    public function EliminarMC()
    {
        $Id = $this->input->post('id');
        if (isset($Id)) {
            $this->Crud_MatrizCotizante->EliminarMC($Id);
            echo json_encode(array("msg"=>"Eliminada La matriz Cotizante"));
        } else {
            echo json_encode(array("msg"=>"No Elimina La matriz Cotizante"));
        }
    }
    #################--->        Laboral Crud tabla      <---#################
    public function VerLaboral()
    {
        echo json_encode($this->Crud_Laboral->SelectLaboral());
    }
    public function CrearLaboral()
    {
        // $Id,
        $Rut = $this->input->post('rut');
        $Nombres = $this->input->post('nombres');
        $Apellidos = $this->input->post('apellidos');
        $OS10 = $this->input->post('os10');
        $Puesto = $this->input->post('puesto');
        $Obervaciones = $this->input->post('obs');
        $Fono = $this->input->post('fono');
        $Mail = $this->input->post('mail');
        $MsgInterno = $this->input->post('msgint');

        if (isset($Rut) || isset($Nombres) || isset($Apellidos) || isset($OS10) || isset($Puesto)
             || isset($Observaciones) || isset($Fono) || isset($Mail) || isset($MsgInterno)) {
            $this->Crud_Laboral->InsertarLaboral($Rut, $Nombres, $Apellidos, $OS10, $Puesto, $Observaciones, $Fono, $Mail, $MsgInterno);
            echo json_encode(array("msg"=> "Creado Laboral con exito"));
        } else {
            echo json_encode(array("msg"=> "No Crea Laboral"));
        }
    }
    public function ActualizarLaboral()
    {
        $Id = $this->input->post('id');
        $Rut = $this->input->post('rut');
        $Nombres = $this->input->post('nombres');
        $Apellidos = $this->input->post('apellidos');
        $OS10 = $this->input->post('os10');
        $Puesto = $this->input->post('puesto');
        $Obervaciones = $this->input->post('obs');
        $Fono = $this->input->post('fono');
        $Mail = $this->input->post('mail');
        $MsgInterno = $this->input->post('msgint');

        if (isset($Id) || isset($Rut) || isset($Nombres) || isset($Apellidos) || isset($OS10) || isset($Puesto)
             || isset($Observaciones) || isset($Fono) || isset($Mail) || isset($MsgInterno)) {
            $this->Crud_Laboral->InsertarLaboral($Id, $Rut, $Nombres, $Apellidos, $OS10, $Puesto, $Observaciones, $Fono, $Mail, $MsgInterno);
            echo json_encode(array("msg"=> "Actualiza Laboral con exito"));
        } else {
            echo json_encode(array("msg"=> "No Actualiza Laboral"));
        }
    }
    public function EliminarLaboral()
    {
        $Id = $this->input->post('id');
        if (isset($Id)) {
            $this->Crud_Laboral->DeleteLaboral($Id);
            echo json_encode(array("msg"=> "Elimina Laboral"));
        } else {
            echo json_encode(array("msg"=> "No Elimina Laboral"));
        }
    }
    
    #################--->        Extras Crud tabla      <---#################
    public function VerExtras()
    {
        echo json_encode($this->Crud_Extras->SelectExtras());
    }
    public function CrearExtras()
    {
        // $Id,
        $CaptorRonda = $this->input->post('captor');
        $CtrlAsis = $this->input->post('ctrl');
        $SuperExcl = $this->input->post('super');
        $CamSeg = $this->input->post('camara');
        $AlarmSeg = $this->input->post('alarma');

        if (isset($CaptorRonda) || isset($CtrlAsis) || isset($SuperExcl) || isset($CamSeg) || isset($AlarmSeg)) {
            $this->Crud_Extras->InsertExtras($CaptorRonda, $CtrlAsis, $SuperExcl, $CamSeg, $AlarmSeg);
            echo json_encode(array('msg' => 'Se Creo Extras'));
        } else {
            echo json_encode(array('msg' => 'No Se Creo Extras'));
        }
    }

    public function ActualizarExtras()
    {
        $Id = $this->input->post('id');
        $CaptorRonda = $this->input->post('captor');
        $CtrlAsis = $this->input->post('ctrl');
        $SuperExcl = $this->input->post('super');
        $CamSeg = $this->input->post('camara');
        $AlarmSeg = $this->input->post('alarma');

        if (isset($CaptorRonda) || isset($CtrlAsis) || isset($SuperExcl) || isset($CamSeg) || isset($AlarmSeg)) {
            $this->Crud_Extras->InsertExtras($CaptorRonda, $CtrlAsis, $SuperExcl, $CamSeg, $AlarmSeg);
            echo json_encode(array('msg' => 'Actualizo Extras'));
        } else {
            echo json_encode(array('msg' => 'No Actualizo Extras'));
        }
    }
    public function DeleteExtras()
    {
        $Id = $this->input->post('id');
        if (isset($Id)) {
            $this->Crud_Extras->DeleteExtras($Id);
            echo json_encode(array('msg' =>"Eliminado Extra"));
        } else {
            echo json_encode(array('msg' =>"No Eliminado Extra"));
        }
    }

    #################--->        empresas_ctrlroll Crud tabla      <---#################

    public function VerEmpresasCtrl()
    {
        echo json_encode($this->Crud_EmpresasCtrlRoll->SelectEmpresasCTRL());
    }
    public function CrearEmpresasCtrl()
    {
        // $Id = $this->input->post('id');
        $CtrlRoll_Id = $this->input->post('ctrlroll');
        $Rut_Emp = $this->input->post('rut_emp');
        $Nombre_Fantasia = $this->input->post('nombre_fantasia');
        $R_Social = $this->input->post('r_social');
        $Giro = $this->input->post('giro');
        if (isset($CtrlRoll_Id) || isset($Rut_Emp) || isset($Nombre_Fantasia) || isset($R_Social) || isset($Giro)) {
            $this->Crud_EmpresasCtrlRoll->InsertEmpresasCTRL(
                $CtrlRoll_Id,
                $Rut_Emp,
                $Nombre_Fantasia,
                $R_Social,
                $Giro
            );
            echo json_encode(array('msg' => "Empresa en Control Roll Creada"));
        } else {
            echo json_encode(array('msg' => " No Crea Empresa en Control Roll "));
        }
    }
    public function ActualizarEmpresasCtrl()
    {
        $Id = $this->input->post('id');
        $CtrlRoll_Id = $this->input->post('ctrlroll');
        $Rut_Emp = $this->input->post('rut_emp');
        $Nombre_Fantasia = $this->input->post('nombre_fantasia');
        $R_Social = $this->input->post('r_social');
        $Giro = $this->input->post('giro');
        if (isset($Id) || isset($CtrlRoll_Id) || isset($Rut_Emp) || isset($Nombre_Fantasia) || isset($R_Social) || isset($Giro)) {
            $this->Crud_EmpresasCtrlRoll->UpdateEmpresasCTRL(
                $Id,
                $CtrlRoll_Id,
                $Rut_Emp,
                $Nombre_Fantasia,
                $R_Social,
                $Giro
            );
            echo json_encode(array('msg' => "Actualiza Empresa en Control Roll"));
        } else {
            echo json_encode(array('msg' => "No Actualiza Empresa en Control Roll"));
        }
    }
    public function EliminarEmpresasCtrl()
    {
        $Id = $this->input->post('id');
        if (isset($Id)) {
            $this->Crud_EmpresasCtrlRoll->DeleteEmpresasCTRL($Id);
            echo json_encode(array("msg"=>"Eliminada Empresa Control Roll"));
        } else {
            echo json_encode(array("msg"=>"No Eliminada Empresa Control Roll"));
        }
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
     
    #################--->     servicios basicos Crud tabla             <---#################

    public function VerServiciosB()
    {
        echo json_encode($this->Crud_ServiciosBasicos->SelectServicios());
    }
    public function CrearServiciosB()
    {
        $Id = $this->input->post('id');
        $Agua = $this->input->post('agua');
        $Luz = $this->input->post('luz');
        $Bano = $this->input->post('bano');
        $Casino = $this->input->post('casino');
        $Caseta = $this->input->post('caseta');
        $Internet = $this->input->post('internet');

        if (isset($Agua) || isset($Luz) || isset($Bano)
        || isset($Casino) || isset($Caseta) || isset($Internet)) {
            $this->crud_ServiciosBasicos->InsertServicios($Agua, $Luz, $Bano, $Casino, $Casete, $Internet);
            echo json_encode(array("msg" => "Exito Servicio Basico"));
        } else {
            echo json_encode(array("msg" => "No Creo Servicio Basico"));
        }
    }

    public function ActualizarServiciosB()
    {
        $Id = $this->input->post('id');
        $Agua = $this->input->post('agua');
        $Luz = $this->input->post('luz');
        $Bano = $this->input->post('bano');
        $Casino = $this->input->post('casino');
        $Caseta = $this->input->post('caseta');
        $Internet = $this->input->post('internet');

        if (isset($Id) || isset($Agua) || isset($Luz) || isset($Bano)
        || isset($Casino) || isset($Caseta) || isset($Internet)) {
            $this->crud_ServiciosBasicos->UpdateServicios($Agua, $Luz, $Bano, $Casino, $Casete, $Internet);
            echo json_encode(array("msg" => "Actualizado Servicio Basico"));
        } else {
            echo json_encode(array("msg" => "No Actualizo Servicio Basico"));
        }
    }

    public function EliminarServiciosB()
    {
        $Id = $this->input->post('id');
        
        if (isset($Id)) {
            echo json_encode(array("msg" => "Eliminar Servicio Basico"));
        } else {
            echo json_encode(array("msg" => "No Eliminar Servicio Basico"));
        }
    }
     
    #################--->          contacto Crud tabla             <---#################

    public function VerContactos()
    {
        echo json_encode($this->Crud_Contacto->SelectContacto());
    }
    public function CrearContactos()
    {
        $Primer = $this->input->post('primer');
        $Segundo = $this->input->post('segundo');
        $Paterno = $this->input->post('paterno');
        $Materno = $this->input->post('materno');
        $Fono = $this->input->post('fono');
        $Mail = $this->input->post('mail');
        $Cargo_Id = $this->input->post('cargo_id');

        if (isset($Primer)  || isset($Segundo) || isset($Paterno) || isset($Materno)
            || isset($Fono) || isset($Mail) || isset($Cargo_Id)) {
            $this->Crud_Contacto->SelectContacto($Primer, $Segundo, $Paterno, $Materno, $Fono, $Mail, $Cargo_Id);
            echo json_encode(array("msg"=> "Contacto Creado!"));
        } else {
            echo json_encode(array("msg"=> "No crea Contacto!"));
        }
    }
    public function ActualizarContactos()
    {
        $Id = $this->input->post('id');
        $Primer = $this->input->post('primer');
        $Segundo = $this->input->post('segundo');
        $Paterno = $this->input->post('paterno');
        $Materno = $this->input->post('materno');
        $Fono = $this->input->post('fono');
        $Mail = $this->input->post('mail');
        $Cargo_Id = $this->input->post('cargo_id');

        if (isset($Id) || isset($Primer)  || isset($Segundo) || isset($Paterno) || isset($Materno)
            || isset($Fono) || isset($Mail) || isset($Cargo_Id)) {
            $this->Crud_Contacto->UpdateContacto($Primer, $Segundo, $Paterno, $Materno, $Fono, $Mail, $Cargo_Id);
            echo json_encode(array("msg"=> "Actualiza Creado!"));
        } else {
            echo json_encode(array("msg"=> "No actualiza Contacto!"));
        }
    }
    public function EliminarContactos()
    {
        $Id = $this->input->post('id');
        if (isset($Id)) {
            $this->Crud_Contacto->DeleteContactos($Id);
            echo json_encode(array("msg" => "Contacto Eliminado"));
        } else {
            echo json_encode(array("msg" => "No Elimina Contacto"));
        }
    }

    #################--->         referencia Crud tabla            <---#################
 
    public function VerReferencia()
    {
        echo json_encode(array($this->Crud_Referencia->SelectReferencia()));
    }
    public function CrearReferencia()
    {
        $Nombre = $this->input->post('nombre');
        $Depto = $this->input->post('depto');
        if (isset($Nombre) || isset($Depto)) {
            $this->Crud_Referencia->InsertReferencia($Nombre, $Depto);
            echo json_encode(array('msg' => "Creo Referencia"));
        } else {
            echo json_encode(array('msg' => "No Creo Referencia"));
        }
    }
    public function ActualizarReferencia()
    {
        $Id = $this->input->post('id');
        $Nombre = $this->input->post('nombre');
        $Depto = $this->input->post('depto');
        if (isset($Id) || isset($Nombre) || isset($Depto)) {
            $this->Crud_Referencia->UpdateReferencia($Nombre, $Depto);
            echo json_encode(array('msg' => "Actualiza Referencia"));
        } else {
            echo json_encode(array('msg' => "No Actualizo Referencia"));
        }
    }
    public function EliminarReferencia()
    {
        $Id = $this->input->post('id');
        if (isset($Id)) {
            $this->Crud_Referencia->DeleteReferencia($Id);
            echo json_encode(array('msg' => "Eliminada Referencia"));
        } else {
            echo json_encode(array('msg' => "No Eliminada Referencia"));
        }
    }
}