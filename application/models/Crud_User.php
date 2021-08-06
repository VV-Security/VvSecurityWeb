<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud_User extends CI_Model
{
    public function SelectUsuarios()
    {
        return $this->db->get("usuarios")->result();
    }
    public function InsertUsuario($Rut, $Primero, $Segundo, $Paterno, $Materno, $Clave, $Mail, $Departamento_Id)
    {
        $datos = array(
            "Rut"=> $Rut,
            "Primero" => $Primero,
            "Segundo" => $Segundo,
            "Paterno" => $Paterno,
            "Materno" => $Materno,
            "Clave" => $Clave,
            "Mail"=> $Mail,
            "Estado" => 1,
            "Depatarmento_Id" => $Departamento_Id
        );
        return $this->db->insert("usuario", $datos);
    }
   
    public function UpdateUsuario($Id, $Rut, $Primero, $Segundo, $Paterno, $Materno, $Clave, $Mail, $Estado, $Departamento_Id)
    {
        $datos = array(
            "Id" => $Id,
            "Rut" => $Rut,
            "Primero" => $Primero,
            "Segundo" => $Segundo,
            "Paterno" => $Paterno,
            "Materno" => $Materno,
            "Clave" => $Clave,
            "Mail"=> $Mail,
            "Estado" =>$Estado,
            "Departamento_Id" => $Departamento_Id
        );
        $this->db->where("Id", $Id);
        return $this->db->update("usuario", $datos);
    }
    public function DeleteUsuario($Id)
    {
        $this->db->where("Id", $Id);
        return $this->db->delete("usuario");
    }
}