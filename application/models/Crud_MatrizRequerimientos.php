<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * undocumented class
 */
class Crud_MatrizRequerimientos extends CI_Controller
{
    public function SelectMR()
    {
        return $this->db->get('matriz_requerimientos')->result();
    }
    public function InsertMR($EmpresasCtrl, $Requerimientos_Id, $Estado_Id)
    {
        $Object = array(
            'EmpresasCtrlRoll_Id' => $EmpresasCtrl,
            'Requerimiento_Id' => $Requerimientos_Id,
            'Estados_Id' => $Estado_Id
        );
        return  $this->db->insert('matriz_requerimientos', $object);
    }
 
    public function UpdateMR($Id, $EmpresasCtrl, $Requerimientos_Id, $Estado_Id)
    {
        $object = array(
            'Id' => $Id,
            'EmpresasCtrlRoll_Id' => $EmpresasCtrl,
            'Requerimiento_Id' => $Requerimientos_Id,
            'Estados_Id' => $Estado_Id
        );
        return  $this->db->update('matriz_requerimientos', $object);
    }
    public function DeleteMR($Id)
    {
        $this->db->where('Id', $Id);
        return $this->db->delete('matriz_requerimientos');
    }
}


/* End of file Crud_MatrizRequerimientos.php */