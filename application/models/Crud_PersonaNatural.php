<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud_PersonaNatural extends CI_Model
{
    public function SelectPersonaN()
    {
        return $this->db->get('persona_natural')->result();
    }
    public function InsertPersonaN(
        $Rut,
        $Primer,
        $Segundo,
        $Paterno,
        $Materno,
        $Fono,
        $Direccion,
        $Numero,
        $Comuna,
        $Ciudad,
        $Mail
    ) {
        $datos = array(
        "Rut" => $Rut,
        "Primer" => $Primer,
        "Segundo" => $Segundo,
        "Paterno" => $Paterno,
        "Materno" => $Materno,
        "Fono" => $Fono,
        "Direccion" => $Direccion,
        "Numero" => $Numero,
        "Comuna" => $Comuna,
        "Ciudad" => $Ciudad,
        "Mail" => $Mail
        );
        
        return $this->db->insert('Persona_Natural', $datos);
    }
    public function UpdatePersonaN(
        $Id,
        $Rut,
        $Primer,
        $Segundo,
        $Paterno,
        $Materno,
        $Fono,
        $Direccion,
        $Numero,
        $Comuna,
        $Ciudad,
        $Mail
    ) {
        $datos = array(
    "Id" => $Id,
    "Rut" => $Rut,
    "Primer" => $Primer,
    "Segundo" => $Segundo,
    "Paterno" => $Paterno,
    "Materno" => $Materno,
    "Fono" => $Fono,
    "Direccion" => $Direccion,
    "Numero" => $Numero,
    "Comuna" => $Comuna,
    "Ciudad" => $Ciudad,
    "Mail" => $Mail
    );
        return $this->db->update('Persona_Natural', $datos);
    }
    public function DeletePersonaN($Id)
    {
        $this->db->where('Id', $Id);
        return $this->db->delete('Persona_Natural');
    }
}