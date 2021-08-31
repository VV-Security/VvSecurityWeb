<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Referencia extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Crud_Referencia');
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