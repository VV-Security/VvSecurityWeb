<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud_User extends CI_Model
{
    public function SelectUsuarios()
    {
        return $this->db->get("usuarios")->result();
    }
    public function InsertUsuario(
        $Rut,
        $Primero,
        $Segundo,
        $Paterno,
        $Materno,
        $Clave,
        $Mail,
        $Estado,
        $Departamento_Id
    ) {
        $datos = array(
            "Rut"=> $Rut,
            "Primero" => $Primero,
            "Segundo" => $Segundo,
            "Paterno" => $Paterno,
            "Materno" => $Materno,
            "Clave" => $Clave,
            "Mail"=> $Mail,
            "Estado" => $Estado,
            "Departamento_Id" => $Departamento_Id
        );
        return $this->db->insert("usuarios", $datos);
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
        return $this->db->update("usuarios", $datos);
    }
    public function DeleteUsuario($Id)
    {
        $this->db->where("Id", $Id);
        return $this->db->delete("usuarios");
    }
    public function JoinUsuarioDepto()
    {
        $this->db->select('U.Id as Id_User,U.Rut as Rut, U.Primero as Primero,
         U.Segundo as Segundo, U.Paterno as Paterno, U.Materno as Materno,
         U.Mail as Mail,U.Clave as Clave ,U.Estado as Estado, U.Departamento_Id as Id_Departamento,
         D.nombre as departamento');
        $this->db->from('usuarios U');
        $this->db->join('departamento D ', 'U.Departamento_Id = D.Id');
        return $this->db->get()->result();
    }
    
    public function FindUsuario($Rut)
    {
        $this->db->where('Rut', $Rut);
        return $this->db->get('usuarios')->result();
    }
    public function LoginSession($Rut, $Clave)
    {
        $this->db->where("Rut", $Rut);
        $this->db->where("Clave", $Clave);
        return $this->db->get("usuarios")->result();
    }
}