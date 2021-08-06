<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud_Empresa extends CI_Model
{
    public function SelectEmpresa()
    {
        return $this->db->get('empresa')->result();
    }
    public function InsertEmpresa(
        $Rut,
        $RazonSocial,
        $GiroComercial,
        $Fono,
        $Direccion,
        $Numero,
        $Comuna,
        $Ciudad,
        $RespresentanteId
    ) {
        $datos = array(
            "rut" => $Rut,
            "Razon_Social" => $RazonSocial,
            "Giro_Comercial" => $GiroComercial,
            "Fono" => $Fono,
            "Direccion" => $Direccion,
            "Numero" => $Numero,
            "Comuna" =>$Comuna,
            "Ciudad" => $Ciudad,
            "Representante_Id" => $RespresentanteId
        );
        return $this->db->insert('empresa', $datos);
    }
    
    public function UpdateEmpresa(
        $Id,
        $Rut,
        $RazonSocial,
        $GiroComercial,
        $Fono,
        $Direccion,
        $Numero,
        $Comuna,
        $Ciudad,
        $RespresentanteId
    ) {
        $datos = array(
        "Id" => $Id,
        "Rut" => $Rut,
        "Razon_Social" => $RazonSocial,
        "Giro_Comercial" => $GiroComercial,
        "Fono" => $Fono,
        "Direccion" => $Direccion,
        "Numero" => $Numero,
        "Comuna" =>$Comuna,
        "Ciudad" => $Ciudad,
        "Representante_Id" => $RespresentanteId
    );
        return $this->db->update("empresa", $datos);
    }
    public function DeleteEmpresa($Id)
    {
        $this->db->where('Id', $Id);
        return $this->db->delete('empresa');
    }
}