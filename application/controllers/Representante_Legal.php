<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Representante_Legal extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model("Crud_RepresentanteLegal");
    }
    ################--->      representante_legal Crud tabla      <---#################

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
}