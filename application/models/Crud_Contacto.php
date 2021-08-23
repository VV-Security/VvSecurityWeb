<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud_Contacto extends CI_Model
{
    public function SelectContacto()
    {
        return $this->db->get('contacto')->result();
    }
    public function InsertContacto(
        $Primer,
        $Segundo,
        $Paterno,
        $Materno,
        $Fono,
        $Mail,
        $Cargo_Id
    ) {
        $datos = array(
            "Primer" => $Primer,
            "Segundo" => $Segundo,
            "Paterno" => $Paterno,
            "Materno" => $Materno,
            "Fono" => $Fono,
            "Mail" => $Mail,
            "Cargo_Id" => $Cargo_Id
        );
        return  $this->db->insert('contacto', $datos);
    }
    public function UpdateContacto(
        $Id,
        $Primer,
        $Segundo,
        $Paterno,
        $Materno,
        $Fono,
        $Mail,
        $Cargo_Id
    ) {
        $datos = array(
            "Id" => $Id,
            "Primer" => $Primer,
            "Segundo" => $Segundo,
            "Paterno" => $Paterno,
            "Materno" => $Materno,
            "Fono" => $Fono,
            "Mail" => $Mail,
            "Cargo_Id" => $Cargo_Id
        );
        return  $this->db->update('contacto', $datos);
    }
    public function DeleteContactos($Id)
    {
        $this->db->where('contacto', $Id);
        return  $this->db->delete('contacto');
    }
}