<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matriz_Cotizante extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Crud_MatrizCotizante');
    }
    
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
}