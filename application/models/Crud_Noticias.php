<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud_Noticias extends CI_Model
{
    public function SelectNoticias()
    {
        return $this->db->get("Noticias")->result();
    }
    public function InsertNoticias($Fecha_registro,$Titulo,$img,$Contenido,$Categoria_id)
    {
        $datos = array(
        "Fecha_registro"=> $Fecha_registro,
            "Titulo" =>$Titulo ,
            "img" =>$img ,
            "Contenido" =>$Contenido ,
            "Categoria_id" =>$Categoria_id
        );
        return $this->db->insert("Noticias", $datos);
    }
   
    public function UpdateNoticias($Id, $Fecha_registro,$Titulo,$img,$Contenido,$Categoria_id)
    {
        $datos = array(
            "Id" => $Id,
            "Fecha_registro"=> $Fecha_registro,
                "Titulo" =>$Titulo ,
                "img" =>$img ,
                "Contenido" =>$Contenido ,
                "Categoria_id" =>$Categoria_id
        );
        $this->db->where("Id", $Id);
        return $this->db->update("Noticias", $datos);
    }
    public function DeleteNoticias($Id)
    {
        $this->db->where("Id", $Id);
        return $this->db->delete("Noticias");
    }

    public function BuscarNoticias($Categoria_Id)
    {
        $this->db->where("Categoria_Id", $Categoria_Id);
        return $this->db->get("Noticias")->result();
    }

    public function BuscarNoticias_Titulo($Titulo)
    {
        $this->db->where("Titulo", $Titulo);
        $this->db->limit(1);
        return $this->db->get("Noticias")->result();
    }
    public function Recientes()
    {
        $this->db->order_by("Noticias.Id", "DESC");
        $this->db->limit(5);
        $this->db->join('categorias', 'categorias.Id = Noticias.Categoria_Id');
        return $this->db->get("Noticias")->result();
    }
}