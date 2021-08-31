<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Departamentos extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model("Crud_Departamentos");
    }

    #################--->          departamento Crud tabla         <---#################

    public function VerDepartamentos()
    {
        echo json_encode($this->Crud_Departamentos->SelectDepartamento());
    }
    public function CrearDepartamentos()
    {
        $Nombre = $this->input->post("Nombre");

        if (isset($Nombre)) {
        
            /*Nombre Crud Función->*/ $this->Crud_Departamentos->InsertDepartamento($Nombre);

            echo json_encode(array("msg" => "Departamento Creado"));
        } else {
            echo json_encode(array("msg"=> "No Creado el Departamento"));
        }
    }
    public function ActualizarDepartamentos()
    {
        $Id = $this->input->post("Id");
        $Nombre = $this->input->post("Nombre");
        if (isset($Id) || isset($Nombre)) {
            /*Nombre Crud Función->*/ $this->Crud_Departamentos->UpdateDepartamento($Id, $Nombre);
            echo json_encode(array("msg" => "Departamento Actualizado!!"));
        } else {
            echo json_encode(array("msg" => "No se Actualizo Departamento!!"));
        }
    }
    public function EliminarDepartamentos()
    {
        $Id = $this->input->post("Id");

        if (isset($Id)) {
            /*Nombre Crud Función->*/ $this->Crud_Departamentos->DeleteDepartamento($Id);
            echo json_encode(array("msg" => "Departamento Eliminado!!"));
        } else {
            echo json_encode(array("msg" => "No se Pudo Eliminar el Departamento!!"));
        }
    }
}