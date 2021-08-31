<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud_Referencia extends CI_Model
{
    public function SelectReferencia()
    {
        return $this->db->get('referencia')->result();
    }
    public function InsertReferencia($Id, $Nombre, $Depto)
    {
        $object = array(
            "Nombre" => $Nombre,
            "Depto" => $Depto
        );
        return $this->db->insert('referencia', $object);
    }
    
    public function UpdateReferencia($Id, $Nombre, $Depto)
    {
        $object = array(
            "Id" => $Id,
            "Nombre" => $Nombre,
            "Depto" => $Depto
        );
        return $this->db->update('referencia', $object);
    }
    public function DeleteReferencia($Id)
    {
        $this->db->where('Id', $Id);
        return $this->db->delete('referencia');
    }
}