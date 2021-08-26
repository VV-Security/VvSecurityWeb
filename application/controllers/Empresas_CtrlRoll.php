<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Empresas_CtrlRoll extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Crud_EmpresasCtrlRoll');
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
}