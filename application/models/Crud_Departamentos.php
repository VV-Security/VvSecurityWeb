<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud_Departamentos extends CI_Model
{
    public function SelectDepartamento()
    {
        return $this->db->get("departamento")->result();
    }
    public function InsertDepartamento($Nombre)
    {
        $datos = array(
            "Nombre" => $Nombre
        );
        return $this->db->insert("departamentos", $datos);
    }
    public function UpdateDepartamento($Id, $Nombre)
    {
        $datos = array(
            "Id" => $Id,
            "Nombre" => $Nombre
        );

        return $this->db->update("departamento", $datos);
    }
    public function DeleteDepartamento($Id)
    {
        $this->db->where('Id', $Id);
        return $this->db->delete('departamento');
    }
}