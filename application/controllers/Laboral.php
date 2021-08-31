<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laboral extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Crud_Laboral');
    }

    public function VerLaboral()
    {
        echo json_encode($this->Crud_Laboral->SelectLaboral());
    }
    public function CrearLaboral()
    {
        $Rut = $this->input->post('rut');
        $Nombres = $this->input->post('nombres');
        $Apellidos = $this->input->post('apellidos');
        $OS10 = $this->input->post('os10');
        $Puesto = $this->input->post('puesto');
        $Obervaciones = $this->input->post('obs');
        $Fono = $this->input->post('fono');
        $Mail = $this->input->post('mail');
        $MsgInterno = $this->input->post('msgint');

        if (isset($Rut) || isset($Nombres) || isset($Apellidos) || isset($OS10) || isset($Puesto)
             || isset($Observaciones) || isset($Fono) || isset($Mail) || isset($MsgInterno)) {
            $this->Crud_Laboral->InsertarLaboral($Rut, $Nombres, $Apellidos, $OS10, $Puesto, $Observaciones, $Fono, $Mail, $MsgInterno);
            echo json_encode(array("msg"=> "Creado Laboral con exito"));
        } else {
            echo json_encode(array("msg"=> "No Crea Laboral"));
        }
    }
    public function ActualizarLaboral()
    {
        $Id = $this->input->post('id');
        $Rut = $this->input->post('rut');
        $Nombres = $this->input->post('nombres');
        $Apellidos = $this->input->post('apellidos');
        $OS10 = $this->input->post('os10');
        $Puesto = $this->input->post('puesto');
        $Obervaciones = $this->input->post('obs');
        $Fono = $this->input->post('fono');
        $Mail = $this->input->post('mail');
        $MsgInterno = $this->input->post('msgInt');

        if (isset($Id) || isset($Rut) || isset($Nombres) || isset($Apellidos) || isset($OS10) || isset($Puesto)
             || isset($Observaciones) || isset($Fono) || isset($Mail) || isset($MsgInterno)) {
            $this->Crud_Laboral->InsertarLaboral($Id, $Rut, $Nombres, $Apellidos, $OS10, $Puesto, $Observaciones, $Fono, $Mail, $MsgInterno);
            echo json_encode(array("msg"=> "Actualiza Laboral con exito"));
        } else {
            echo json_encode(array("msg"=> "No Actualiza Laboral"));
        }
    }
    public function EliminarLaboral()
    {
        $Id = $this->input->post('id');
        if (isset($Id)) {
            $this->Crud_Laboral->DeleteLaboral($Id);
            echo json_encode(array("msg"=> "Elimina Laboral"));
        } else {
            echo json_encode(array("msg"=> "No Elimina Laboral"));
        }
    }
}