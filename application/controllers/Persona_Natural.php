<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Persona_Natural extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model("Crud_PersonaNatural");
    }

  
    #################--->       persona_natural Crud tabla         <---#################
    
    public function VerPersonaNatural()
    {
        echo json_encode($this->Crud_PersonaNatural->SelectPersonaN());
    }
    public function CrearPersonaNatural()
    {
        $Rut = $this->input->post('rut');
        $Primer= $this->input->post('primer');
        $Segundo =  $this->input->post('segundo');
        $Paterno = $this->input->post('paterno');
        $Materno = $this->input->post('materno');
        $Fono = $this->input->post('fono');
        $Direccion = $this->input->post('direccion');
        $Numero = $this->input->post('numero');
        $Comuna = $this->input->post('comuna');
        $Ciudad = $this->input->post('name');
        $Mail = $this->input->post('mail');
       
        if (isset($Rut) || isset($Primer) || isset($Segundo) || isset($Paterno) || isset($Materno) ||
       isset($Fono) || isset($Direccion) || isset($Numero) || isset($Comuna) || isset($Ciudad) || isset($Mail)) {
            $this->Crud_PersonaNatural->InsertPersonalN(
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
            );
            echo json_encode(array("msg" => "Personal Natural Creada"));
        } else {
            echo json_encode(array("msg" => "No Creada la Persona Natural"));
        }
    }
    public function ActualizarPersonaNatural()
    {
        $Id = $this->input->post('id');
        $Rut = $this->input->post('rut');
        $Primer= $this->input->post('primer');
        $Segundo =  $this->input->post('segundo');
        $Paterno = $this->input->post('paterno');
        $Materno = $this->input->post('materno');
        $Fono = $this->input->post('fono');
        $Direccion = $this->input->post('direccion');
        $Numero = $this->input->post('numero');
        $Comuna = $this->input->post('comuna');
        $Ciudad = $this->input->post('name');
        $Mail = $this->input->post('mail');

        if (isset($Id) ||isset($Rut) || isset($Primer) || isset($Segundo) || isset($Paterno) || isset($Materno) ||
       isset($Fono) || isset($Direccion) || isset($Numero) || isset($Comuna) || isset($Ciudad) || isset($Mail)) {
            $this->Crud_PersonaNatural->UpdatePersonalN(
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
            );
            echo json_encode(array("msg" => "Actualizado la Persona Natural"));
        } else {
            echo json_encode(array("msg" => "No se actualizo Personal Natural"));
        }
    }
    public function EliminarPersonaNatural()
    {
        $Id = $this->input->post('id');
        if (isset($Id)) {
            $this->Crud_PersonaNatural->DeletePersonaN($Id);
            echo json_encode(array("msg" => "Persona Natural Eliminada"));
        } else {
            echo json_encode(array("msg" => "No Eliminada la Persona Natural"));
        }
    }
}