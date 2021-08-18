<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud_Categoria extends CI_Model
{
    public function SelectCategorias()
    {
        return $this->db->get("categorias")->result();
    }
    public function InsertCategorias($Nombre)
    {
        $datos = array(
            "Nombre"=> $Nombre
        );
        return $this->db->insert("categorias", $datos);
    }
   
    public function UpdateCategorias($Id, $Nombre)
    {
        $datos = array(
            "Id" => $Id,
            "Nombre" => $Nombre
        );
        $this->db->where("Id", $Id);
        return $this->db->update("categorias", $datos);
    }
    public function DeleteCategorias($Id)
    {
        $this->db->where("Id", $Id);
        return $this->db->delete("categorias");
    }
    public function BuscarCategorias($Nombre)
    {
        $this->db->where("Nombre", $Nombre);
        return $this->db->get("categorias")->result();
    }
}