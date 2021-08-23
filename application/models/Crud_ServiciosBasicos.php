<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud_ServiciosBasicos extends CI_Model
{
    public function SelectServicios()
    {
        return $this->db->get('servicios_basicos')->result();
    }

    public function InsertServicios($Agua, $Luz, $Bano, $Casino, $Caseta, $Internet)
    {
        $datos = array(
            "Agua"=> $Agua,
            "Luz" => $Luz,
            "Bano" => $Bano,
            "Casino" =>$Casino,
            "Caseta" => $Caseta,
            "Internet" => $Internet
        );

        return $this->db->insert('servicios_basicos', $datos);
    }
    public function UpdateServicios(
        $Id,
        $Agua,
        $Luz,
        $Bano,
        $Casino,
        $Caseta,
        $Internet
    ) {
        $datos = array(
            "id" => $Id,
            "Agua"=> $Agua,
            "Luz" => $Luz,
            "Bano" => $Bano,
            "Casino" =>$Casino,
            "Caseta" => $Caseta,
            "Internet" => $Internet
        );

        return  $this->db->update('servicios_basicos', $datos);
    }
    public function DeleteServicio($Id)
    {
        $this->db->where('Id', $Id);
        return  $this->db->delete('servicios_basicos');
    }
}