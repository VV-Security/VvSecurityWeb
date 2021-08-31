<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matriz_Requerimientos extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Crud_MatrizRequerimientos');
    }
    
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
}