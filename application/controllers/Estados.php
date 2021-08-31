<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * undocumented class
 */
class Estados extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Crud_Estados");
    }
    public function VerEstados()
    {
        echo json_encode($this->Crud_Estados->SelectEstados());
    }
    public function CrearEstados()
    {
        $Nombre = $this->input->post('nombre');
        if (isset($Nombre)) {
            $this->Crud_Estados->InsertEstados($Nombre);
            echo json_encode(array('msg'=> 'Estado Creado'));
        } else {
            echo json_encode(array('msg'=> 'No Crea Estado'));
        }
    }
    public function ActualizarEstados()
    {
        $Id = $this->input->post('id');
        $Nombre = $this->input->post('nombre');
        if (isset($Id) || isset($Nombre)) {
            $this->Crud_Estados->ActualizarEstados($Id, $Nombre);
            echo json_encode(array('msg'=> 'Estado Actualizado'));
        } else {
            echo json_encode(array('msg'=> 'No Actualiza Estado'));
        }
    }
    public function EliminarEstados()
    {
        $Id = $this->input->post('id');
        if (isset($Id)) {
            $this->Crud_Estados->DeleteEstados($Id);
            echo json_encode(array("msg" =>"Elimina Estado"));
        } else {
            echo json_encode(array("msg" =>"No Elimina Estado"));
        }
    }
}


/* End of file Estados.php */