<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tipo_Servicio extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Crud_TipoServicio');
    }
    
    public function VerTS()
    {
        echo json_encode($this->Crud_TipoServicio->SelectTS());
    }
    public function CrearTS()
    {
        $Ggss = $this->input->post('ggss');
        $ServiAseoInd = $this->input->post('servicioAseo');
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
}