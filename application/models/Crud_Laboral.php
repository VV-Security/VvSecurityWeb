<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Crud_Laboral extends CI_Model
{
    public function SelectLaboral()
    {
        return $this->db->get('Laboral')->result();
    }
    public function InsertLaboral(
        $Rut,
        $Nombres,
        $Apellidos,
        $OS10,
        $Puesto,
        $Obervaciones,
        $Fono,
        $Mail,
        $MsgInterno
    ) {
        $data = array(
            "Rut" => $Rut,
            "Nombre" =>$Nombres,
            "Apellidos" => $Apellidos,
           "OS10" => $OS10,
            "Puesto"=>$Puesto,
            "Observaciones"=>$Obervaciones,
            "Fono"=>$Fono,
            "Mail" =>$Mail,
           "MsgInterno"=> $MsgInterno
        );
        return $this->db->insert('laboral', $data);
    }
    
    public function UpdateLaboral(
        $Id,
        $Rut,
        $Nombres,
        $Apellidos,
        $OS10,
        $Puesto,
        $Obervaciones,
        $Fono,
        $Mail,
        $MsgInterno
    ) {
        $data = array(
            "Id" => $Id,
            "Rut" => $Rut,
            "Nombre" =>$Nombres,
            "Apellidos" => $Apellidos,
           "OS10" => $OS10,
            "Puesto"=>$Puesto,
            "Observaciones"=>$Obervaciones,
            "Fono"=>$Fono,
            "Mail" =>$Mail,
           "MsgInterno"=> $MsgInterno
        );
        return $this->db->update('laboral', $data);
    }
    public function DeleteLaboral($Id)
    {
        $this->db->where('Id', $Id);
        return $this->db->delete('laboral');
    }
}


/* End of file filename.php */