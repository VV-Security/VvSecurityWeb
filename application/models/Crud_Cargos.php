<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud_Cargos extends CI_Model
{
    public function SelectCargos()
    {
        return $this->db->get('cargos')->result();
    }
    public function InsertCargos($Nombre)
    {
        $datos = array(
                "Nombre" => $Nombre
            );
        return $this->db->insert('Cargos', $datos);
    }
    public function UpdateCargos($Id, $Nombre)
    {
        $datos = array(
            "Id" => $Id,
            "Nombre" => $Nombre
        );
        
        $this->db->update('cargos', $datos);
    }
    public function DeleteCargos()
    {
        $this->db->where("Id", $Id);
        return $this->db->delete("cargos");
    }
}