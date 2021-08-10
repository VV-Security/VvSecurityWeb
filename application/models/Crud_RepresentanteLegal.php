<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud_RepresentanteLegal extends CI_Model
{
    public function SelectRepresentante()
    {
        return $this->db->get('representante_legal')->result();
    }
    public function InsertRepresentante(
        $Rut,
        $Primero,
        $Segundo,
        $Paterno,
        $Materno,
        $Fono,
        $Mail
    ) {
        $datos = array(
            "Rut"=> $Rut,
            "Primero" => $Primero,
            "Segundo" => $Segundo,
            "Paterno" => $Paterno,
            "Materno" => $Materno,
            "Fono" => $Fono,
            "Mail" => $Mail
        );

        return $this->db->insert('representante_legal', $datos);
    }
    public function UpdateRepresentante(
        $Id,
        $Rut,
        $Primero,
        $Segundo,
        $Paterno,
        $Materno,
        $Fono,
        $Mail
    ) {
        $datos = array(
            "Id" =>$Id,
            "Rut"=> $Rut,
            "Primero" => $Primero,
            "Segundo" => $Segundo,
            "Paterno" => $Paterno,
            "Materno" => $Materno,
            "Fono" => $Fono,
            "Mail" => $Mail
        );

        return $this->db->update('representante_legal', $datos);
    }
    public function DeleteRepresentante($Id)
    {
        $this->db->where('Id', $Id);
        return $this->db->delete('representante_legal');
    }
}