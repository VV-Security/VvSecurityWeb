<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contacto extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Crud_Contacto');
    }
    #################--->          contacto Crud tabla             <---#################

    public function VerContactos()
    {
        echo json_encode($this->Crud_Contacto->SelectContacto());
    }
    public function CrearContactos()
    {
        $Primer = $this->input->post('primer');
        $Segundo = $this->input->post('segundo');
        $Paterno = $this->input->post('paterno');
        $Materno = $this->input->post('materno');
        $Fono = $this->input->post('fono');
        $Mail = $this->input->post('mail');
        $Cargo_Id = $this->input->post('cargo_id');

        if (isset($Primer)  || isset($Segundo) || isset($Paterno) || isset($Materno)
            || isset($Fono) || isset($Mail) || isset($Cargo_Id)) {
            $this->Crud_Contacto->SelectContacto($Primer, $Segundo, $Paterno, $Materno, $Fono, $Mail, $Cargo_Id);
            echo json_encode(array("msg"=> "Contacto Creado!"));
        } else {
            echo json_encode(array("msg"=> "No crea Contacto!"));
        }
    }
    public function ActualizarContactos()
    {
        $Id = $this->input->post('id');
        $Primer = $this->input->post('primer');
        $Segundo = $this->input->post('segundo');
        $Paterno = $this->input->post('paterno');
        $Materno = $this->input->post('materno');
        $Fono = $this->input->post('fono');
        $Mail = $this->input->post('mail');
        $Cargo_Id = $this->input->post('cargo_id');

        if (isset($Id) || isset($Primer)  || isset($Segundo) || isset($Paterno) || isset($Materno)
            || isset($Fono) || isset($Mail) || isset($Cargo_Id)) {
            $this->Crud_Contacto->UpdateContacto($Primer, $Segundo, $Paterno, $Materno, $Fono, $Mail, $Cargo_Id);
            echo json_encode(array("msg"=> "Actualiza Creado!"));
        } else {
            echo json_encode(array("msg"=> "No actualiza Contacto!"));
        }
    }
    public function EliminarContactos()
    {
        $Id = $this->input->post('id');
        if (isset($Id)) {
            $this->Crud_Contacto->DeleteContactos($Id);
            echo json_encode(array("msg" => "Contacto Eliminado"));
        } else {
            echo json_encode(array("msg" => "No Elimina Contacto"));
        }
    }
}