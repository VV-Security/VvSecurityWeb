<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud_User extends CI_Model
{
    public function Usuarios()
    {
        return $this->db->get("Usuarios")->result();
    }
    public function InsertUsuario($Rut, $Primer, $Segundo, $Paterno, $Materno, $Fono, $Direccion, $Numero, $Comuna, $Ciudad, $Mail)
    {
        $datos = array(
            "Rut"=> $Rut,
            "Primer" => $Primer,
            "Segundo" => $Segundo,
            "Paterno" => $Paterno,
            "Materno" => $Materno,
            "Fono" => $Fono,
            "Direccion"=> $Direccion,
            "Numero" => $Numero
        );
        return $this->db->insert("Usuario", $datos);
    }
}