<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cargos extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model("Crud_Cargos");
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
}