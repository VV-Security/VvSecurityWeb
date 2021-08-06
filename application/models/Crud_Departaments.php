<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud_Departaments extends CI_Model
{
    public function SelectDepartamento()
    {
        return $this->db->get("Departamento")->result();
    }
    public function InsertDepartamento($Nombre)
    {
        $datos = array(
            "nombre" => $Nombre
        );
        return $this->db->insert("departamentos", $datos);
    }
    public function UpdateDepartamento($Id, $Nombre)
    {
        $datos = array(
            "id" => $Id,
            "nombre" => $Nombre
        );

        return $this->db->update("departamento", $datos);
    }
    public function DeleteDepartamento($Id)
    {
        $this->db->where('Id', $Id);
        return $this->db->delete('departamento');
    }
}