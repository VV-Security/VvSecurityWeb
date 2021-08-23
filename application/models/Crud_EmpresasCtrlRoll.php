<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Crud_EmpresasCtrlRoll extends CI_Model
{
    public function SelectEmpresasCTRL()
    {
        return $this->db->get('empresas_ctrlroll')->result();
    }
    public function InsertEmpresasCTRL(
        $CtrlRoll_Id,
        $Rut_Emp,
        $Nombre_Fantasia,
        $R_Social,
        $Giro
    ) {
        $data = array(
        'CtrlRoll_Id'=> $CtrlRoll_Id,
        'Rut_Emp' => $Rut_Emp,
        'Nombre_Fantasia' => $Nombre_Fantasia,
        'R_Social'    => $R_Social  ,
        'Giro' => $Giro
    );
        $this->db->insert($data);
    }
    public function UpdateEmpresasCTRL(
        $Id,
        $CtrlRoll_Id,
        $Rut_Emp,
        $Nombre_Fantasia,
        $R_Social,
        $Giro
    ) {
        $data = array(
        'Id' => $Id,
        'CtrlRoll_Id'=> $CtrlRoll_Id,
        'Rut_Emp' => $Rut_Emp,
        'Nombre_Fantasia' => $Nombre_Fantasia,
        'R_Social'    => $R_Social  ,
        'Giro' => $Giro
    );
        $this->db->update($data);
    }
    public function DeleteEmpresasCTRL($Id)
    {
        $this->db->where('Id', $Id);
        $this->db->delete('empresas_ctrlroll');
    }
}
 

/* End of file filename.php */