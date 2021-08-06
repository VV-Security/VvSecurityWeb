<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud_MatrizServicio extends CI_Model
{
    public function SelectMatrizServicio()
    {
        return $this->db->get('matriz_servicio')->result();
    }
    public function InsertMatrizServicio(
        $Ubicacion,
        $Duracion,
        $Referencia_Ubi,
        $Jornada,
        $Turno,
        $HorarioLaboral,
        $Observaciones,
        $TipoServicio_Id,
        $ServiciosBasicos_Id,
        $Extras_Id,
        $Referencias_Id
    ) {
        $datos = array(
            "Ubicacion" => $Ubicacion,
            "Duracion" => $Duracion,
            "Referencia_Ubi" => $Referencia_Ubi,
            "Jornada" => $Jornada,
            "Turno" => $Turno,
            "HorarioLaboral" => $HorarioLaboral,
            "Observaciones" => $Observaciones,
            "TipoServicio_Id" => $TipoServicio_Id,
            "ServicioBasicos_Id" => $ServiciosBasicos_Id,
            "Extras_Id" => $Extras_Id,
            "Referencias_Id" => $Referencias_Id
            );
        return $this->db->insert('matriz_servicio', $datos);
    }
    public function UpdateMatrizServicio(
        $Id,
        $Ubicacion,
        $Duracion,
        $Referencia_Ubi,
        $Jornada,
        $Turno,
        $HorarioLaboral,
        $Observaciones,
        $TipoServicio_Id,
        $ServiciosBasicos_Id,
        $Extras_Id,
        $Referencias_Id
    ) {
        $datos = array(
        "Id" => $Id,
        "Ubicacion" => $Ubicacion,
        "Duracion" => $Duracion,
        "Referencia_Ubi" => $Referencia_Ubi,
        "Jornada" => $Jornada,
        "Turno" => $Turno,
        "HorarioLaboral" => $HorarioLaboral,
        "Observaciones" => $Observaciones,
        "TipoServicio_Id" => $TipoServicio_Id,
        "ServicioBasicos_Id" => $ServiciosBasicos_Id,
        "Extras_Id" => $Extras_Id,
        "Referencias_Id" => $Referencias_Id
        );
        return $this->db->update('matriz_servicio', $datos);
    }
    public function DeleteMatrizServicio($Id)
    {
        $this->db->where('Id', $Id);
        return $this->db->delete('matriz_servicio');
    }
}