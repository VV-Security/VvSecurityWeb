<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model("Crud_User");
    }

    #################--->          departamento Crud tabla         <---#################

    #################--->           usuarios Crud tabla            <---#################

    public function VerUsuario()
    {
        echo json_encode($this->Crud_User->SelectUsuarios());
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
        || isset($Materno) || isset($Clave) || isset ($Mail) || isset($Estado) || isset($Departamento_Id)) 
        {
           $this->Crud_User->UpdateUsuario($Id, $Rut, $Primero, $Segundo, $Paterno, $Materno, $Clave, $Mail, $Estado, $Departamento_Id);
            
           echo json_encode(array("msg" => "Usuario Registrado Con Éxito"));
        }else {
            echo json_encode(array("msg" => "No se Pudo Crear Usuario"));
        }        
    }
    
}


    #################--->          cargos Crud tabla               <---#################

    #################--->          contacto Crud tabla             <---#################

    #################--->       persona_natural Crud tabla         <---#################

    #################--->         referencia Crud tabla            <---#################
 
    #################--->         tipo_servicio Crud tabla         <---#################

    #################--->      representante_legal Crud tabla      <---#################

    #################--->          empresa Crud tabla              <---#################

    #################--->        tipo_servicio Crud tabla          <---#################
    
    #################--->        referencia Crud tabla             <---#################

    #################--->        matriz_servicio Crud tabla        <---#################

    #################--->        matriz_cotizante Crud tabla       <---#################

    #################--->        empresas_ctrlroll Crud tabla      <---#################

    #################--->        requerimiento Crud tabla          <---#################

    #################--->        estados Crud tabla                <---#################

    #################--->     matriz_requerimientos Crud tabla     <---#################

    #################--->         noticias Crud tabla              <---#################
    
    #################--->         categorías Crud tabla            <---#################
}