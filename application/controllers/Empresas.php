<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Empresas extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model("Crud_Empresa");
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
}